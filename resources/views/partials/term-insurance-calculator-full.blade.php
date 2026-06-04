@php
    $whatsappNumber = '919711043285';
    $whatsappMessage = 'Hi, I used the Term Insurance Calculator and would like help choosing the right life cover.';
    $whatsappUrl = 'https://wa.me/' . $whatsappNumber . '?text=' . rawurlencode($whatsappMessage);
@endphp
<link rel="stylesheet" href="{{ public_asset('css/term-insurance-calculator.css') }}">

<div class="elementor-element e-flex e-con-boxed e-con e-parent">
    <div class="e-con-inner">
        <div class="tic-intro">
            <div class="elementor-heading-wrapper-inner">
                <div class="elementor-sub-title"><span class="sub-title">CALCULATORS</span></div>
            </div>
            <h2>Term Insurance Calculator</h2>
            <p>Estimate how much term life cover your family needs using the Human Life Value (HLV) method. Adjust income, age, expenses, and liabilities to see your recommended cover instantly.</p>
        </div>

        <div class="tic-wrap">
            <div class="tic-cover-card" aria-live="polite">
                <div class="tic-cover-card__label">Recommended Cover · HLV Mode</div>
                <p class="tic-cover-card__amount" id="tic-cover-amount">₹49.78 L</p>
                <p class="tic-cover-card__warn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
                        <line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/>
                    </svg>
                    Premium increases every birthday — lock your price now
                </p>
                <p class="tic-cover-card__desc">Based on your income, expenses and liabilities — this is the minimum cover your family needs to maintain their lifestyle until age 60.</p>
            </div>

            <div class="tic-card">
                <div class="tic-card__body">
                    <div class="tic-grid">
                        <div class="tic-inputs">
                            <div class="tic-field">
                                <div class="tic-field-row">
                                    <label for="tic-income">Monthly income</label>
                                    <span class="tic-field-value" id="tic-val-income">₹50.0 K</span>
                                </div>
                                <input type="range" class="tic-range" id="tic-income-range" min="10000" max="500000" step="5000" value="50000" aria-label="Monthly income slider" />
                                <div class="tic-input-wrap">
                                    <span class="tic-prefix">₹</span>
                                    <input type="number" id="tic-income" min="10000" max="500000" step="5000" value="50000" inputmode="decimal" aria-label="Monthly income" />
                                </div>
                            </div>

                            <div class="tic-field">
                                <div class="tic-field-row">
                                    <label for="tic-age">Current age</label>
                                    <span class="tic-field-value" id="tic-val-age">30 yrs</span>
                                </div>
                                <input type="range" class="tic-range" id="tic-age-range" min="18" max="65" step="1" value="30" aria-label="Current age slider" />
                                <div class="tic-input-wrap">
                                    <input type="number" id="tic-age" min="18" max="65" step="1" value="30" inputmode="numeric" aria-label="Current age" />
                                    <span class="tic-suffix">yrs</span>
                                </div>
                            </div>

                            <div class="tic-field">
                                <div class="tic-field-row">
                                    <label for="tic-expense">Monthly expenses</label>
                                    <span class="tic-field-value" id="tic-val-expense">60%</span>
                                </div>
                                <input type="range" class="tic-range" id="tic-expense-range" min="20" max="90" step="1" value="60" aria-label="Monthly expenses percentage slider" />
                                <div class="tic-input-wrap">
                                    <input type="number" id="tic-expense" min="20" max="90" step="1" value="60" inputmode="numeric" aria-label="Monthly expenses percentage" />
                                    <span class="tic-suffix">%</span>
                                </div>
                            </div>

                            <div class="tic-field">
                                <div class="tic-field-row">
                                    <label for="tic-liabilities">Total liabilities</label>
                                    <span class="tic-field-value" id="tic-val-liabilities">₹20.00 L</span>
                                </div>
                                <input type="range" class="tic-range" id="tic-liabilities-range" min="0" max="10000000" step="100000" value="2000000" aria-label="Total liabilities slider" />
                                <div class="tic-input-wrap">
                                    <span class="tic-prefix">₹</span>
                                    <input type="number" id="tic-liabilities" min="0" max="10000000" step="100000" value="2000000" inputmode="decimal" aria-label="Total liabilities" />
                                </div>
                            </div>
                        </div>

                        <div class="tic-results">
                            <div class="tic-summary" aria-live="polite">
                                <h3>Cover breakdown</h3>
                                <table class="tic-summary-table">
                                    <tr><td>Annual income</td><td id="tic-out-annual">—</td></tr>
                                    <tr><td>Years to protect (until 60)</td><td id="tic-out-years">—</td></tr>
                                    <tr><td>Monthly expense need</td><td id="tic-out-monthly-need">—</td></tr>
                                    <tr><td>Income replacement (HLV)</td><td id="tic-out-replacement">—</td></tr>
                                    <tr><td>Outstanding liabilities</td><td id="tic-out-liabilities">—</td></tr>
                                    <tr class="tic-summary-table__total"><td>Recommended cover</td><td id="tic-out-cover">—</td></tr>
                                </table>
                                <div class="tic-metrics">
                                    <div class="tic-metric">
                                        <span>Adequacy</span>
                                        <strong id="tic-adequacy">High</strong>
                                    </div>
                                    <div class="tic-metric">
                                        <span>Risk level</span>
                                        <strong id="tic-risk">Moderate</strong>
                                    </div>
                                </div>
                                <a class="tic-cta" href="{{ $whatsappUrl }}" target="_blank" rel="noopener noreferrer">Get cover advice on WhatsApp</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tic-how">
                <h3>How this estimate works</h3>
                <p>We multiply your annual income by the share spent on living costs, spread that need over the years until age 60, and add a standard discount factor (÷ 3.6) used in HLV illustrations. Outstanding loans and liabilities are added on top. This is a planning guide only — actual cover should account for existing policies, inflation, and insurer underwriting.</p>
            </div>

            <p class="tic-note">Figures are illustrative and not a quote or recommendation from any insurer. For a tailored term plan, speak with our advisors or explore <a href="{{ url('/services/life-insurance') }}">life insurance solutions</a>.</p>
        </div>
    </div>
</div>

<script>
(function () {
    function formatINR(n) {
        if (!isFinite(n)) return "—";
        return "₹ " + Math.round(n).toLocaleString("en-IN");
    }
    function formatCompact(n) {
        if (n >= 10000000) return "₹" + (n / 10000000).toFixed(2) + " Cr";
        if (n >= 100000) return "₹" + (n / 100000).toFixed(2) + " L";
        return "₹" + (n / 1000).toFixed(1) + " K";
    }
    function calcHLV(income, age, expensePct, liabilities) {
        var years = Math.max(1, 60 - age);
        var annual = income * 12;
        var replacement = (annual * (expensePct / 100) * years) / 3.6;
        var cover = Math.max(0, Math.round(replacement + liabilities));
        return {
            years: years,
            annual: annual,
            monthlyNeed: income * (expensePct / 100),
            replacement: Math.round(replacement),
            liabilities: liabilities,
            cover: cover
        };
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
    function clamp(v, min, max) {
        return Math.min(max, Math.max(min, v));
    }
    function syncPair(rangeId, inputId) {
        var range = document.getElementById(rangeId);
        var input = document.getElementById(inputId);
        if (!range || !input) return;
        range.addEventListener("input", function () {
            input.value = range.value;
            calc();
        });
        input.addEventListener("input", function () {
            var v = parseFloat(input.value);
            if (!isFinite(v)) return;
            v = clamp(v, parseFloat(range.min), parseFloat(range.max));
            range.value = v;
            input.value = v;
            calc();
        });
    }
    function calc() {
        var income = parseFloat(document.getElementById("tic-income").value) || 0;
        var age = parseInt(document.getElementById("tic-age").value, 10) || 30;
        var expense = parseFloat(document.getElementById("tic-expense").value) || 0;
        var liabilities = parseFloat(document.getElementById("tic-liabilities").value) || 0;
        var res = calcHLV(income, age, expense, liabilities);

        document.getElementById("tic-val-income").textContent = formatCompact(income);
        document.getElementById("tic-val-age").textContent = age + " yrs";
        document.getElementById("tic-val-expense").textContent = Math.round(expense) + "%";
        document.getElementById("tic-val-liabilities").textContent = formatCompact(liabilities);
        document.getElementById("tic-cover-amount").textContent = formatCompact(res.cover);
        document.getElementById("tic-out-annual").textContent = formatINR(res.annual);
        document.getElementById("tic-out-years").textContent = res.years + " years";
        document.getElementById("tic-out-monthly-need").textContent = formatINR(res.monthlyNeed);
        document.getElementById("tic-out-replacement").textContent = formatINR(res.replacement);
        document.getElementById("tic-out-liabilities").textContent = formatINR(res.liabilities);
        document.getElementById("tic-out-cover").textContent = formatINR(res.cover);
        document.getElementById("tic-adequacy").textContent = adequacyLabel(res.cover, res.annual);
        document.getElementById("tic-risk").textContent = riskLabel(liabilities, res.cover);
    }
    syncPair("tic-income-range", "tic-income");
    syncPair("tic-age-range", "tic-age");
    syncPair("tic-expense-range", "tic-expense");
    syncPair("tic-liabilities-range", "tic-liabilities");
    calc();
})();
</script>
