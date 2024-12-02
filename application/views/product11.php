<style>
  

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
    .li{
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

<section class="services lightblue  pt-120 pb-60">
    <div class="container">
    <div class="row text-center pb-4">
            <h3 class="tm-gold-text tm-form-title"><span class="gradient-text">THIRD PARTY INTEGRATIONS</span></h3>
        </div> 
       
    <p >PROSOFT provides the different platforms for integration using API, HL7 and customize protocols.</p>

               <!-- First Row -->
    <div class="row r1 pt-4">
      <div class="card">
        <h5 class="card-title">Interfaces Available</h5>
        <ul class="list-unstyled">
                        <li>QuickBooks / Tally</li>
                        <li>Human Resource Management</li>
                        <li>Signal Drugs Database / CIMS (Drug Database)/ Lexi /Vidal</li>
                        <li>SMS integration (One way / Both way)</li>
                        <li>WhatsApp Automation to get patient reports, receipts, and invoices</li>
                        <li>Lab Machine Interface (Abbott Processor, Roche Infinity, and others)</li>
                        <li>PACS for Radiology Images</li>
                        <li>Barcode integration</li>
                        <li>KIOSK/LCD</li>
                        <li>Smart Card Integration</li>
                        <li>Web/Patient Portal Interface</li>
                    </ul>
      </div>
      <div class="card">
        <h5 class="card-title">Healthcare Standards</h5>
        <ul class="list-unstyled">
                        <li>NABH/NABL, JCI</li>
                        <li>Standard Coding – ICD-10, CPT, SNOMED</li>
                        <li>HL7 compliant</li>
                        <li>HIPAA Compliant</li>
                    </ul>
      </div>
    </div>

    </div>
</section>