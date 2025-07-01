<style>
/* CSS Animation for Infinite Zoom-In */
@keyframes zoomInOut {

    0%,
    100% {
        transform: scale(1);
        opacity: 1;
    }

    50% {
        transform: scale(1.2);
        /* Slightly bigger at midpoint */
        opacity: 0.8;
        /* Slight fade at midpoint */
    }
}

/* Apply Infinite Animation */
.stat-box {
    font-size: 2.5rem;
    font-weight: bold;
    color: #08CF65;
    margin-bottom: 10px;
    display: inline-block;
    animation: zoomInOut 4s ease-in-out infinite;
    /* Infinite loop */
}

.stat-label {
    font-size: 1rem;
    color: #666;
}

/* Responsive Design */
@media (max-width: 991px) {

    /* Tablet view (max-width 991px) */
    .col-md-3 {
        width: 50%;
        /* Two items side by side */
        margin-bottom: 30px;
    }
}

@media (max-width: 576px) {

    /* Mobile view (max-width 576px) */
    .col-md-3 {
        width: 50%;
        /* Two items side by side */
        margin-bottom: 30px;
    }
}

@media (min-width: 992px) {

    /* Desktop view (min-width 992px) */
    .col-md-3 {
        width: 25%;
        /* Four items in one row */
    }
}
</style>

<div class="track-record-section">
    <div class="section-header mb-80 text-center">
        <h2 class="fw-600 wow splt-txt" data-splitting>Our Track Record</h2>
        <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
            Delivering Consistent Results Across Sales Performance and Growth Metrics
        </p>
    </div>

    <div class="container">
        <div class="row text-center">
            <div class="col-md-3">
                <div class="stat-box" data-target="100" data-suffix="+">0</div>
                <div class="stat-label">Projects Handled</div>
            </div>
            <div class="col-md-3">
                <div class="stat-box" data-target="10" data-suffix="M+">0</div>
                <div class="stat-label">Leads Managed</div>
            </div>
            <div class="col-md-3">
                <div class="stat-box" data-target="15" data-suffix="K+">0</div>
                <div class="stat-label">Sales Empowered</div>
            </div>
            <div class="col-md-3">
                <div class="stat-box" data-target="6" data-suffix="+">0</div>
                <div class="stat-label">States Presence</div>
            </div>
        </div>
    </div>
</div>

<script>
function animateCounter(stat) {
    const target = +stat.getAttribute('data-target');
    const suffix = stat.getAttribute('data-suffix') || '';
    const duration = 6000; // Animation time in ms (20 seconds)
    let start = 0;
    const step = Math.ceil(target / (duration / 40)); // Increment per frame (60fps)

    function updateCount() {
        start += step;
        if (start < target) {
            stat.textContent = start + suffix;
            requestAnimationFrame(updateCount);
        } else {
            stat.textContent = target + suffix; // Ensure final value is accurate
        }
    }

    updateCount();
}

// Intersection Observer setup
document.addEventListener('DOMContentLoaded', () => {
    const trackRecordSection = document.querySelector('.track-record-section');
    const stats = document.querySelectorAll('.stat-box');

    if (!trackRecordSection || stats.length === 0) return;

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                stats.forEach(stat => animateCounter(stat));
                observer.unobserve(entry.target); // Run animation once
            }
        });
    }, {
        root: null,
        threshold: 0.4 // Trigger when 40% of section is visible
    });

    observer.observe(trackRecordSection);
});
</script>