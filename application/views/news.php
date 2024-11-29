<style>
    /* General Section Styling */
    .card-section {
      background-color: #eaf7ff; /* Light blue background */
      padding: 40px 20px;
     
    }
    
    .container {
      max-width: 1200px;
      margin: 0 auto;
    }
    
    .card-wrapper {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: space-between;
    }
    
    /* Individual Card Styling */
    .card {
      flex: 1;
      min-width: 300px; /* Ensure proper size on small screens */
      max-width: 30%;
      border: 1px solid #ccc;
      border-radius: 8px;
      overflow: hidden;
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }
    
    .card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }
    
    .card h3 {
      font-size: 1.2em;
      margin: 15px;
      color: #333;
    }
    
    .card p {
      font-size: 0.95em;
      margin: 0 15px 15px;
      color: #555;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }
    
    .read-more {
      display: inline-block;
      margin: 10px 15px 15px;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      font-size: 0.9em;
      transition: background-color 0.3s ease;
    }
    
    .read-more:hover {
      background-color: #0056b3;
    }
    </style>

<section class="aai-breadcrumb" style="background: url('assets/image/banner.jpg') no-repeat center
            center/cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="text-center">
                    <h2 class="aai-page-title">News</h2>
                    <ul
                        class="aai-breadcrumb-nav d-flex align-items-center justify-content-center">
                        <li>
                            <a
                                href=""
                                class="aai-breadcrumb-link text-decoration-underline">Home</a>
                        </li>
                        <li>
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14 16L18 12M18 12L14 8M18 12L6 12"
                                    stroke="#DADADA"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </li>
                        <li>
                            <a href="news" class="aai-breadcrumb-link">News</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cards Section -->
<section class="card-section lightblue">
    <div class="container pb-5 text-center">
        <h1 > <span class="gradient-text" style=" font-weight: var(--font-semibold);
">Latest News</span></h1>
    </div>
    <div class="container">
      <div class="card-wrapper">
        <div class="card">
          <img src="assets/image/b1.jpg" alt="Image 1">
          <h3>WHAT IS HOSPITAL MANAGEMENT SYSTEM</h3>
          <p>Modern hospital management system is an...</p>
          <a href="page1.html" class="read-more">Read More</a>
        </div>
        <div class="card">
          <img src="assets/image/b2.jpg" alt="Image 2">
          <h3>ARAB HEALTH 2020 <br> INVITATION</h3>
          <p>Micro participates Arab Health 2020...</p>
          <a href="page2.html" class="read-more">Read More</a>
        </div>
        <div class="card">
          <img src="assets/image/b3.jpg" alt="Image 3">
          <h3>Launching Mobile App and Patient Portal</h3>
          <p>Short description of the card content...</p>
          <a href="page3.html" class="read-more">Read More</a>
        </div>
      </div>
    </div>
  </section>
  