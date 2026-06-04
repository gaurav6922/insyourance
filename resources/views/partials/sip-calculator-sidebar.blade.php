@php
    $idPrefix = $idPrefix ?? 'mf-sip';
@endphp
<div class="mf-sip-sidebar" data-sip-prefix="{{ $idPrefix }}">
    <div class="mf-sip-sidebar__card">
        <div class="mf-sip-sidebar__head">
            <h3>SIP Calculator</h3>
            <p>Estimate maturity for monthly SIPs or lump sum investments.</p>
        </div>
        <div class="mf-sip-sidebar__tabs" role="tablist">
            <button type="button" class="mf-sip-sidebar__tab is-active" id="{{ $idPrefix }}-tab-sip" role="tab"
                aria-selected="true" data-mode="sip">SIP</button>
            <button type="button" class="mf-sip-sidebar__tab" id="{{ $idPrefix }}-tab-lumpsum" role="tab"
                aria-selected="false" data-mode="lumpsum">Lumpsum</button>
        </div>
        <div class="mf-sip-sidebar__body">
            <div id="{{ $idPrefix }}-panel-sip">
                <div class="mf-sip-sidebar__field">
                    <label for="{{ $idPrefix }}-monthly">Monthly investment</label>
                    <div class="mf-sip-sidebar__input-wrap">
                        <span class="mf-sip-sidebar__prefix">₹</span>
                        <input type="number" id="{{ $idPrefix }}-monthly" min="0" step="100" value="5000"
                            inputmode="decimal" />
                    </div>
                </div>
                <div class="mf-sip-sidebar__field">
                    <label for="{{ $idPrefix }}-rate">Expected return (p.a.)</label>
                    <div class="mf-sip-sidebar__input-wrap">
                        <input type="number" id="{{ $idPrefix }}-rate" min="0" max="100" step="0.1" value="12"
                            inputmode="decimal" />
                        <span class="mf-sip-sidebar__suffix">%</span>
                    </div>
                </div>
                <div class="mf-sip-sidebar__field">
                    <label for="{{ $idPrefix }}-years">Time period</label>
                    <div class="mf-sip-sidebar__input-wrap">
                        <input type="number" id="{{ $idPrefix }}-years" min="1" max="60" step="1" value="10"
                            inputmode="numeric" />
                        <span class="mf-sip-sidebar__suffix">Yr</span>
                    </div>
                </div>
            </div>
            <div id="{{ $idPrefix }}-panel-lumpsum" hidden>
                <div class="mf-sip-sidebar__field">
                    <label for="{{ $idPrefix }}-lump-amount">Total investment</label>
                    <div class="mf-sip-sidebar__input-wrap">
                        <span class="mf-sip-sidebar__prefix">₹</span>
                        <input type="number" id="{{ $idPrefix }}-lump-amount" min="0" step="1000" value="100000"
                            inputmode="decimal" />
                    </div>
                </div>
                <div class="mf-sip-sidebar__field">
                    <label for="{{ $idPrefix }}-lump-rate">Expected return (p.a.)</label>
                    <div class="mf-sip-sidebar__input-wrap">
                        <input type="number" id="{{ $idPrefix }}-lump-rate" min="0" max="100" step="0.1" value="12"
                            inputmode="decimal" />
                        <span class="mf-sip-sidebar__suffix">%</span>
                    </div>
                </div>
                <div class="mf-sip-sidebar__field">
                    <label for="{{ $idPrefix }}-lump-years">Time period</label>
                    <div class="mf-sip-sidebar__input-wrap">
                        <input type="number" id="{{ $idPrefix }}-lump-years" min="1" max="60" step="1" value="10"
                            inputmode="numeric" />
                        <span class="mf-sip-sidebar__suffix">Yr</span>
                    </div>
                </div>
            </div>
            <div class="mf-sip-sidebar__results" aria-live="polite">
                <div class="mf-sip-sidebar__row"><span>Invested</span><strong id="{{ $idPrefix }}-out-invested">—</strong></div>
                <div class="mf-sip-sidebar__row"><span>Est. returns</span><strong id="{{ $idPrefix }}-out-returns">—</strong></div>
                <div class="mf-sip-sidebar__row mf-sip-sidebar__total"><span>Total value</span><strong
                        id="{{ $idPrefix }}-out-total">—</strong></div>
            </div>
            <a class="mf-sip-sidebar__link" href="{{ url('/sip-planner') }}">Open full SIP planner →</a>
        </div>
    </div>
</div>
<script>
(function () {
    var root = document.querySelector('.mf-sip-sidebar[data-sip-prefix="{{ $idPrefix }}"]');
    if (!root) return;
    var p = "{{ $idPrefix }}";
    function formatINR(n) {
        if (!isFinite(n)) return "—";
        return "₹ " + Math.round(n).toLocaleString("en-IN");
    }
    function sipMaturity(P, annualPct, years) {
        var r = annualPct / 100;
        var i = Math.pow(1 + r, 1 / 12) - 1;
        var n = Math.round(years * 12);
        if (n <= 0 || P <= 0) return { total: 0, invested: 0 };
        if (i <= 0) return { total: P * n, invested: P * n };
        var total = P * ((Math.pow(1 + i, n) - 1) / i) * (1 + i);
        return { total: total, invested: P * n };
    }
    function lumpsumFV(pv, annualPct, years) {
        return pv * Math.pow(1 + annualPct / 100, years);
    }
    var mode = "sip";
    var tabSip = document.getElementById(p + "-tab-sip");
    var tabLump = document.getElementById(p + "-tab-lumpsum");
    var panelSip = document.getElementById(p + "-panel-sip");
    var panelLump = document.getElementById(p + "-panel-lumpsum");
    function setMode(m) {
        mode = m;
        var isSip = m === "sip";
        tabSip.classList.toggle("is-active", isSip);
        tabLump.classList.toggle("is-active", !isSip);
        tabSip.setAttribute("aria-selected", isSip);
        tabLump.setAttribute("aria-selected", !isSip);
        panelSip.hidden = !isSip;
        panelLump.hidden = isSip;
        calc();
    }
    tabSip.addEventListener("click", function () { setMode("sip"); });
    tabLump.addEventListener("click", function () { setMode("lumpsum"); });
    function calc() {
        var invested, total;
        if (mode === "sip") {
            var P = parseFloat(document.getElementById(p + "-monthly").value) || 0;
            var rate = parseFloat(document.getElementById(p + "-rate").value) || 0;
            var y = parseFloat(document.getElementById(p + "-years").value) || 0;
            var res = sipMaturity(P, rate, y);
            invested = res.invested;
            total = res.total;
        } else {
            var pv = parseFloat(document.getElementById(p + "-lump-amount").value) || 0;
            var lr = parseFloat(document.getElementById(p + "-lump-rate").value) || 0;
            var ly = parseFloat(document.getElementById(p + "-lump-years").value) || 0;
            invested = pv;
            total = lumpsumFV(pv, lr, ly);
        }
        document.getElementById(p + "-out-invested").textContent = formatINR(invested);
        document.getElementById(p + "-out-returns").textContent = formatINR(total - invested);
        document.getElementById(p + "-out-total").textContent = formatINR(total);
    }
    [p + "-monthly", p + "-rate", p + "-years", p + "-lump-amount", p + "-lump-rate", p + "-lump-years"].forEach(function (id) {
        var el = document.getElementById(id);
        if (el) el.addEventListener("input", calc);
    });
    calc();
})();
</script>
