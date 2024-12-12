<style>
  ul {
    list-style: none;
    /* Remove the default bullets */
    padding: 0;
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
  }

  .r1 {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
  }

  .card {
    background-color: #ffffff;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    flex: 1 1 calc(50% - 20px);
    /* Two cards in a row */
    display: flex;
    flex-direction: column;
    /* justify-content: space-between; */
  }

  .card-title {
    font-size: 1.25rem;
    font-weight: bold;
    margin-bottom: 15px;
    color: #1A406D;
  }

  .card-text {
    list-style-type: none;
    padding: 0;
    margin: 0;
    color: #555657;
  }

  .card-text li {
    font-size: 0.95rem;
    margin-bottom: 10px;
    line-height: 1.5;
    color: #555657;

  }

  .li {
    color: #555657 !important;
  }



  .card-text li {
    font-size: 0.95rem;
    margin-bottom: 10px;
    line-height: 1.5;
    color: #555657;
  }

  /* Responsive for smaller screens */
  @media (max-width: 768px) {
    .card {
      flex: 1 1 100%;
      /* Stack cards vertically */
    }
  }
</style>

<section class="lightblue pt-120 pb-60">
  <div class="container">

    <div class="row">
      <div class="col-md-7 pt-2 ">
        <h1 class="section-title"><span class="gradient-text"> Certified </span>Global Healthcare Services Provider </h1>

        <p class="aai-list-item-text">
          Founded in 2007, <strong>PROSOFT</strong> is dedicated to reducing stress on healthcare services by delivering innovative, reliable, and efficient solutions. Our mission is to provide seamless and best-in-class healthcare management tools.
        </p>

        <h3 class="pt-3">Innovative Healthcare Solutions</h3>
        <p>Our solutions are tailored for Hospitals, Diagnostic Centers, Specialty Clinics</p>
      </div>
      <div class="col-md-5">
        <img src="assets/image/product2.jpeg" alt="" style="width: 100%; border-radius: 20px;">
      </div>

    </div>



    <div class="row text-center pt-5">
      <h3>Key Features</h3>

    </div>
    <!-- First Row -->
    <div class="row r1 pt-4">
      <div class="card">
        <h5 class="card-title">Operator/Call Center</h5>
        <ul class="tick">
          <li>Doctor Appointments and Room Bookings for patients with SMS confirmation for the bookings.</li>
          <li>Appointment Dashboard where all doctor appointments can be seen in the same screen.</li>
          <li>Appointment Schedule print.</li>
        </ul>
      </div>
      <div class="card">
        <h5 class="card-title">Treatment Room/Nurse Desk</h5>
        <ul  class="tick">
          <li>Adding the Vital signs, Capturing Medical and Family history, Review of system for the patients.</li>
          <li>Internal medicines/Injection prescribed by the doctor will be shown in Nurse Desk and nurse can document the required details.</li>
          <li>Adding Procedures for patients directly coming to Nurse desk.</li>
        </ul>
      </div>
    </div>

    <!-- Second Row -->
    <div class="row r1 pt-4">
      <div class="card">
        <h5 class="card-title">E-Claims</h5>
        <ul  class="tick">
          <li>Coder Review of Claims by checking the medical records, changing diagnosis, CPT edit etc.</li>
          <li>Validating each Claim during coder audit before approving.</li>
          <li>Coder and Doctor Communication for the documentation edit.</li>
          <li>Approving the claims which are ready for submissions.</li>
          <li>Generating Submission batches companywise.</li>
          <li>Automatic uploading of claims to Shafafiya.</li>
        </ul>
      </div>
      <div class="card">
        <h5 class="card-title">Receptionist</h5>
        <ul  class="tick">
          <li>Creating New patient files using Emirates ID to fetch the patient details like Name, nationality, Birth Date, Emirates ID etc.</li>
          <li>Automatic Insurance Card/Emirates ID Scanning and upload into the system.</li>
          <li>Options to search existing patients with File No, Mobile no, Name etc.</li>
          <li>Registration of existing patient to the Doctors, Laboratory, Radiology and Treatment Room.</li>
          <li>Capturing Patient Signature on Request Forms using Electronic Signature Device.</li>
        </ul>
      </div>
    </div>

    <!-- Third Row -->
    <div class="row r1 pt-4">
      <div class="card">
        <h5 class="card-title">Cashier</h5>
        <ul class="tick">
          <li>Generating invoices for patients with options to update co-payment percentage and deduction.</li>
          <li>Adding advance payments for patients and using them while generating invoices.</li>
          <li>Printing patient receipts and daily reports for cash collections.</li>
          <li>Editing created invoices like changing insurance name and amount.</li>
        </ul>
      </div>
      <div class="card">
        <h5 class="card-title">Doctor</h5>
        <ul class="tick">
          <li>Automatically Visit types for the patient based on previous visits.</li>
          <li>Capturing details like Medical History, Vital Signs, Pain Assessment.</li>
          <li>Adding diagnosis codes, Procedures, Lab/Rad orders, and prescriptions.</li>
          <li>Patient Evaluation management code calculated automatically.</li>
          <li>Checking Lab/Radiology test results and medical records of patients.</li>
        </ul>
      </div>
    </div>

    <!-- Fourth Row -->
    <div class="row r1 pt-4">
      <div class="card">
        <h5 class="card-title">Resubmission</h5>
        <ul class="tick">
          <li>Automatic Remittance Advice downloads from Shafafiya.</li>
          <li>Selecting files to be reconciled in the system from available downloads.</li>
          <li>Resubmitting claims with rejections.</li>
          <li>Auditing claims for coders with all required data available.</li>
          <li>Generating resubmission batches and automatic uploads.</li>
        </ul>
      </div>
      <div class="card">
        <h5 class="card-title">Pharmacy</h5>
        <ul class="tick">
          <li>Creating LPO and GRN for items/Drugs with automatic stock updates.</li>
          <li>Dispensing approved drugs and manual submissions in batches.</li>
          <li>Easy Cash patient Point of Sale with daily reports for sales tracking.</li>
          <li>Audit logs to track user activities.</li>
        </ul>
      </div>
    </div>

</section>

<section id="more-services" class="more-services">
  <div class="container">
    <br />
    <!-- Section Title -->
    <div class="row text-center">
      <h3 class="tm-gold-text tm-form-title">Pharmacy</h3>
    </div>

    <br />
    <!-- Cards Section: Row 1 -->
    <div class="row">
      <!-- First Card: Purchase -->
      <div class="col-md-6 d-flex align-items-stretch">
        <div class="card aos-init aos-animate lightblue" data-aos="fade-up" data-aos-delay="100">
          <div class="card-body">
            <h5 class="card-title">Purchase</h5>
            <p class="card-text">Creating LPO and printing the LPO with options like LPO authentication from Accounts/Supervisor.</p>
            <hr>
            <p class="card-text">Creating GRN on receiving items/Drugs and automatic stock updates.</p>
            <hr>
            <p class="card-text">All required reports to track the LPO’s and GRN’s.</p>
          </div>
        </div>
      </div>

      <!-- Second Card: Sales -->
      <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
        <div class="card aos-init aos-animate lightblue" data-aos="fade-up" data-aos-delay="200">
          <div class="card-body">
            <h5 class="card-title">Sales</h5>
            <p class="card-text">Patients from the medical center are directly shown in pharmacy with prescription and diagnosis codes. Approval request can be sent from system to all insurance companies.</p>
            <hr>
            <p class="card-text">Approved drugs can be dispensed and submitted to Shafafiya automatically.</p>
            <hr>
            <p class="card-text">Manual submissions are also possible in batches.</p>
            <hr>
            <p class="card-text">Easy Cash patient Point of Sale.</p>
            <hr>
            <p class="card-text">Audit logs to track all user activities.</p>
            <hr>
            <p class="card-text">Daily reports to track sales, item-wise report, and many other reports.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Cards Section: Row 2 -->
    <div class="row">
      <!-- Third Card: Reconciliation -->
      <div class="col-md-6 d-flex align-items-stretch mt-4">
        <div class="card aos-init aos-animate lightblue" data-aos="fade-up" data-aos-delay="100">
          <div class="card-body">
            <h5 class="card-title">Reconciliation</h5>
            <p class="card-text">Automatic Remittance Advice downloads from Shafafiya.</p>
            <hr>
            <p class="card-text">Selecting files to be reconciled in system from the available downloads.</p>
            <hr>
            <p class="card-text">After reconciliation, different reports are available for the management to track payments. Reports include Shortage report (Fully rejected, Fully paid, Partially Paid claims), Ageing report to track outstanding payments, Denial analysis reports, etc.</p>
          </div>
        </div>
      </div>

      <!-- Fourth Card: Resubmission -->
      <div class="col-md-6 d-flex align-items-stretch mt-4">
        <div class="card aos-init aos-animate lightblue" data-aos="fade-up" data-aos-delay="200">
          <div class="card-body">
            <h5 class="card-title">Resubmission</h5>
            <p class="card-text">Automatic Remittance Advice downloads from Shafafiya.</p>
            <hr>
            <p class="card-text">Selecting files to be reconciled in system from the available downloads.</p>
            <hr>
            <p class="card-text">All claims with rejections can be resubmitted.</p>
            <hr>
            <p class="card-text">System tracks different levels of resubmission with reports for the same.</p>
            <hr>
            <p class="card-text">Resubmission claims auditing for coders with all required data is available along with attaching reports to the claims.</p>
            <hr>
            <p class="card-text">Generating resubmission batches and automatic uploads are available.</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>