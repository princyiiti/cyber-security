<?= $this->include('layout/header') ?>

<style>
.slider-box {
    max-width: 900px;
    /* Set your desired width */
    height: 500px;
    /* Set your desired height */
    margin: auto;
    /* Center the box horizontally */
    overflow: hidden;
    /* Hide overflow content */
    border: 2px solid #ccc;
    /* Optional: Add a border */
    border-radius: 10px;
    /* Optional: Rounded corners */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    /* Optional: Add a shadow */
}

.carousel-inner img {
    height: 100%;
    /* Make images fill the container height */
    object-fit: cover;
    /* Cover the entire box while maintaining aspect ratio */
}

.notification-box .card-header {
    font-size: 1.2em;
    font-weight: bold;
}

.notification-box ul {
    padding-left: 0;
    list-style-type: none;
}

.notification-box li {
    display: flex;
    align-items: center;
    font-size: 0.95em;
}

.notification-box li i {
    font-size: 1.2em;
}

.auto-scroll {
    padding-left: 0;
    list-style-type: none;
    animation: scrollUp 10s linear infinite;
}

.notification-box img {
    width: 24px;
    height: 24px;
}
.card-body {
    max-height: 300px;  /* Keeps the container size fixed */
    overflow: hidden !important; /* Prevents any manual scrolling */
}
@keyframes scrollUp {
    0% {
        transform: translateY(100%);
    }
    100% {
        transform: translateY(-100%);
    }
}
.nav-tabs .nav-link {
            border-radius: 0.25rem 0.25rem 0 0;
            font-weight: 600;
            text-transform: uppercase;
        }

        .nav-tabs .nav-link.active {
            background-color: #ff7f50;
            color: white;
            border: 2px solid #ff7f50;
        }

        .tab-content {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 0 0 0.25rem 0.25rem;
        }

        .tab-pane {
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .tab-header {
            margin-bottom: 15px;
        }
</style>


<section class="container py-4">

    <div class="row">
        <div class="col-lg-8">
            <!-- <h1>welcome to home page</h1> -->
            <!-- Slider Section -->
            <div class="slider-box">
                <div id="homeSlider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="public/slider1.jpg" class="d-block w-100" alt="Slide 1">
                            <div class="carousel-caption">
                                <h5>Slide 1 Title</h5>
                                <p>Slide 1 Description</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="public/slider5.jpg" class="d-block w-100" alt="Slide 2">
                            <div class="carousel-caption">
                                <h5>Slide 2 Title</h5>
                                <p>Slide 2 Description</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="public/slider3.jpg" class="d-block w-100" alt="Slide 3">
                            <div class="carousel-caption">
                                <h5>Slide 3 Title</h5>
                                <p>Slide 3 Description</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#homeSlider" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#homeSlider" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </div>
        <div class="col-lg-4">
    <div class="notification-box card shadow-sm p-3 mb-5 bg-white rounded">
        <div class="card-header bg-warning text-dark text-center">
            <strong>Important News</strong>
        </div>
        <div class="card-body overflow-auto" style="max-height: 300px;">
            <ul class="list-unstyled auto-scroll">
                <li class="mb-3 d-flex align-items-center">
                    <img src="public/arrow-red.gif" class="me-2" alt="Warning" style="width: 24px; height: 24px;">
                    Upcoming security seminar on Nov 15th.
                </li>
                <li class="mb-3 d-flex align-items-center">
                    <img src="public/arrow-red.gif" class="me-2" alt="Warning" style="width: 24px; height: 24px;">
                    Upcoming security seminar on Nov 15th.
                </li>
                <li class="mb-3 d-flex align-items-center">
                    <img src="public/arrow-red.gif" class="me-2" alt="Warning" style="width: 24px; height: 24px;">
                    Upcoming security seminar on Nov 15th.
                </li>
                <li class="mb-3 d-flex align-items-center">
                    <img src="public/right.gif" class="me-2" alt="Warning" style="width: 24px; height: 24px;">
                    New policy updates effective from Dec 1st.
                </li>
                <li class="d-flex align-items-center">
                    <img src="public/right.gif" class="me-2" alt="Info" style="width: 24px; height: 24px;">
                    Check out our new courses launching this month.
                </li>
            </ul>
        </div>
    </div>
</div>
    </div>
</section>

<?= $this->include('layout/footer') ?>

    