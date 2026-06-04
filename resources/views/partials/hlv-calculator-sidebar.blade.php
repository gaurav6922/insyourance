@php
    $idPrefix = $idPrefix ?? 'li-hlv';
@endphp
<link rel="stylesheet" href="{{ public_asset('css/hlv-calculator-sidebar.css') }}">
<div class="hlv-sidebar" data-hlv-prefix="{{ $idPrefix }}">
    <div class="hlv-sidebar__card" aria-live="polite">
        <div class="hlv-sidebar__head">
            <div class="hlv-sidebar__head-row">
                <span class="hlv-sidebar__label hlv-sidebar__label--inline">Recommended Cover</span>
                <span class="hlv-sidebar__mode">HLV Mode</span>
            </div>
        </div>
        <div class="hlv-sidebar__body">
            <p class="hlv-sidebar__amount" id="{{ $idPrefix }}-cover-amount">₹49.78 L</p>
            <p class="hlv-sidebar__warn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
                    <line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/>
                </svg>
                Premium increases every birthday — lock your price now
            </p>
            <p class="hlv-sidebar__cover-desc">Based on your income, expenses and liabilities — this is the minimum cover your family needs to maintain their lifestyle.</p>
            <a class="hlv-sidebar__link" href="{{ url('/term-insurance-calculator') }}">Open full calculator →</a>
        </div>
    </div>

    <div class="hlv-sidebar__card">
        <div class="hlv-sidebar__head">
            <div class="hlv-sidebar__head-row">
                <div>
                    <h3>Term Insurance Calculator</h3>
                    <p>Use the HLV method to find how much life cover your family needs.</p>
                </div>
                <span class="hlv-sidebar__badge">HLV</span>
            </div>
        </div>
        <div class="hlv-sidebar__body">
            <div class="hlv-sidebar__field">
                <div class="hlv-sidebar__field-row">
                    <label for="{{ $idPrefix }}-income">Monthly Income</label>
                    <span class="hlv-sidebar__field-value" id="{{ $idPrefix }}-val-income">₹50.0 K</span>
                </div>
                <input type="range" class="hlv-sidebar__range" id="{{ $idPrefix }}-income" min="10000" max="500000" step="5000" value="50000" aria-label="Monthly income" />
            </div>

            <div class="hlv-sidebar__field">
                <div class="hlv-sidebar__field-row">
                    <label for="{{ $idPrefix }}-age">Current Age</label>
                    <span class="hlv-sidebar__field-value" id="{{ $idPrefix }}-val-age">30 yrs</span>
                </div>
                <input type="range" class="hlv-sidebar__range" id="{{ $idPrefix }}-age" min="18" max="65" step="1" value="30" aria-label="Current age" />
            </div>

            <div class="hlv-sidebar__field">
                <div class="hlv-sidebar__field-row">
                    <label for="{{ $idPrefix }}-expense">Monthly Expenses %</label>
                    <span class="hlv-sidebar__field-value" id="{{ $idPrefix }}-val-expense">60%</span>
                </div>
                <input type="range" class="hlv-sidebar__range" id="{{ $idPrefix }}-expense" min="20" max="90" step="1" value="60" aria-label="Monthly expenses percentage" />
            </div>

            <div class="hlv-sidebar__field">
                <div class="hlv-sidebar__field-row">
                    <label for="{{ $idPrefix }}-liabilities">Total Liabilities</label>
                    <span class="hlv-sidebar__field-value" id="{{ $idPrefix }}-val-liabilities">₹20.00 L</span>
                </div>
                <input type="range" class="hlv-sidebar__range" id="{{ $idPrefix }}-liabilities" min="0" max="10000000" step="100000" value="2000000" aria-label="Total liabilities" />
            </div>

            <div class="hlv-sidebar__metrics" aria-live="polite">
                <div class="hlv-sidebar__metric">
                    <span class="hlv-sidebar__metric-label">Adequacy</span>
                    <span class="hlv-sidebar__metric-value" id="{{ $idPrefix }}-adequacy">High</span>
                </div>
                <div class="hlv-sidebar__metric">
                    <span class="hlv-sidebar__metric-label">Risk Level</span>
                    <span class="hlv-sidebar__metric-value" id="{{ $idPrefix }}-risk">Moderate</span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
(function () {
    var p = "{{ $idPrefix }}";
    var root = document.querySelector('.hlv-sidebar[data-hlv-prefix="' + p + '"]');
    if (!root) return;

    function formatK(n) {
        if (n >= 100000) return "₹" + (n / 100000).toFixed(2) + " L";
        return "₹" + (n / 1000).toFixed(1) + " K";
    }

    function formatCover(n) {
        if (n >= 10000000) return "₹" + (n / 10000000).toFixed(2) + " Cr";
        return "₹" + (n / 100000).toFixed(2) + " L";
    }

    function calcHLV(income, age, expensePct, liabilities) {
        var years = Math.max(1, 60 - age);
        var annual = income * 12;
        var cover = (annual * (expensePct / 100) * years) / 3.6 + liabilities;
        return Math.max(0, Math.round(cover));
    }

    function adequacyLabel(cover, annual) {
        var ratio = annual > 0 ? cover / annual : 0;
        if (ratio >= 7) return "High";
        if (ratio >= 4) return "Moderate";
        return "Low";
    }

    function riskLabel(liabilities, cover) {
        if (cover <= 0) return "High";
        var ratio = liabilities / cover;
        if (ratio > 0.5) return "High";
        if (ratio > 0.25) return "Moderate";
        return "Low";
    }

    function calc() {
        var income = parseFloat(document.getElementById(p + "-income").value) || 0;
        var age = parseInt(document.getElementById(p + "-age").value, 10) || 30;
        var expense = parseFloat(document.getElementById(p + "-expense").value) || 0;
        var liabilities = parseFloat(document.getElementById(p + "-liabilities").value) || 0;
        var cover = calcHLV(income, age, expense, liabilities);
        var annual = income * 12;

        document.getElementById(p + "-val-income").textContent = formatK(income);
        document.getElementById(p + "-val-age").textContent = age + " yrs";
        document.getElementById(p + "-val-expense").textContent = Math.round(expense) + "%";
        document.getElementById(p + "-val-liabilities").textContent = formatK(liabilities);
        document.getElementById(p + "-cover-amount").textContent = formatCover(cover);
        document.getElementById(p + "-adequacy").textContent = adequacyLabel(cover, annual);
        document.getElementById(p + "-risk").textContent = riskLabel(liabilities, cover);
    }

    [p + "-income", p + "-age", p + "-expense", p + "-liabilities"].forEach(function (id) {
        var el = document.getElementById(id);
        if (el) el.addEventListener("input", calc);
    });
    calc();
})();
</script>
