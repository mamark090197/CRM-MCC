<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>MCCCRM</title>
    
</head>
<body>
    <h1>Customer Relationship Management</h1>


<style>
        

    </style>


<!-- <form action="save_data.php" method="post">
    <div style="display: flex; flex-wrap: wrap;">
        <div style="flex: 25%; padding: 0 15px;">
            <input type="text" name="CompanyName" placeholder="Company Name" required><br>
            <input type="text" name="CorrectDob" placeholder="Correct DOB" required><br>
            <input type="text" name="Leads" placeholder="Leads" required><br>
            <input type="text" name="LeadsID" placeholder="Leads ID" required><br>
            <input type="text" name="ProductType" placeholder="Product Type" required><br>
            <input type="text" name="ToyotaDealer" placeholder="Toyota Dealer" required><br>
        </div>
        <div style="flex: 25%; padding: 0 15px;">
            <input type="text" name="AccountName" placeholder="Account Name" required><br>
            <input type="text" name="LastName" placeholder="Last Name" required><br>
            <input type="text" name="GivenName" placeholder="Given Name" required><br>
            <input type="text" name="MiddleName" placeholder="Middle Name" required><br>
            <input type="text" name="Suffix" placeholder="Suffix" required><br>
            <input type="text" name="EmbossingName" placeholder="Embossing Name" required><br>
        </div>
        <div style="flex: 25%; padding: 0 15px;">
            <input type="text" name="DateOfBirth" placeholder="Date of Birth" required><br>
            <input type="text" name="PlaceOfBirth" placeholder="Place of Birth" required><br>
            <input type="text" name="Gender" placeholder="Gender" required><br>
            <input type="text" name="CivilStatus" placeholder="Civil Status" required><br>
            <input type="text" name="Citizenship" placeholder="Citizenship" required><br>
            <input type="text" name="CID" placeholder="CID" required><br>
        </div>
        <div style="flex: 25%; padding: 0 15px;">
            <input type="text" name="HomePhone" placeholder="Home Phone" required><br>
            <input type="text" name="MobilePhone" placeholder="Mobile Phone" required><br>
            <input type="text" name="AlternateNumber1" placeholder="Alternate Number 1" required><br>
            <input type="text" name="AlternateNumber2" placeholder="Alternate Number 2" required><br>
            <input type="email" name="EmailAddress" placeholder="Email Address" required><br>
            <input type="text" name="HomeAddress" placeholder="Home Address" required><br>
        </div>
    </div> -->
    <!-- <div style="padding: 15px;">
        <button type="submit" name="add">Submit</button>
    </div>
</form> -->


    <!-- <form action="save_data.php" method="post">
        <!-- Accordion Section 1: Row 1 -->
        <button class="accordion">Personal Information</button>
        <div class="panel">
            <div class="row">
                <div class="column">
                    <input type="text" name="CompanyName" placeholder="Company Name" required><br>
                </div>
                <div class="column">
                    <input type="text" name="AccountName" placeholder="Account Name" required><br>
                </div>
             
                <div class="column">
                    <input type="text" name="LastName" placeholder="Last Name" required><br>
                </div>
                <div class="column">
                    <input type="text" name="GivenName" placeholder="Product Type" required><br>
                </div>
                <div class="column">
                    <input type="text" name="MiddleName" placeholder="Suffix" required><br>
                </div>
                <div class="column">
                    <input type="text" name="Suffix" placeholder="Suffix" required><br>
                </div>
                <div class="column">
                    <input type="text" name="EmbossingName" placeholder="Embossing Name" required><br>
                </div>
                <div class="column">
                    <input type="date" name="Date of Birth" placeholder="DateOfBirth" required><br>
                </div>
                <div class="column">
                    <input type="date" name="PlaceOfBirth" placeholder="Place of Birth" required><br>
                </div>

                <div class="column">
                    <input type="text" name="Gender" placeholder="Gender" required><br>
                </div>
               
                <div class="column">
                    <input type="text" name="CivilStatus" placeholder="Citizenship" required><br>
                </div>
            </div>
            <div class="column">
                    <input type="text" name="Cid" placeholder="Cid" required><br>
                </div>
                <div class="column">
                    <input type="text" name="HomePhone" placeholder="Home Phone" required><br>
                </div>
                <div class="column">
                    <input type="text" name="MobilePhone" placeholder="Mobile Phone" required><br>
                </div>

                <div class="column">
                    <input type="text" name="AlternativeNumber1" placeholder="alternative number 1" required><br>
                </div>
                <div class="column">
                    <input type="text" name="AlternativeNumber2" placeholder="alternative number 2" required><br>
                </div>

                <div class="column">
                    <input type="text" name="EmailAddress" placeholder="Email address" required><br>
                </div>

                <div class="column">
                    <input type="text" name="HomeAddress" placeholder="Home address" required><br>
                </div>

                <div class="column">
                    <input type="text" name="ZipCode" placeholder="Zip code" required><br>
                </div>

                <div class="column">
                    <input type="text" name="HomeOwnership" placeholder="Home Ownership" required><br>
                </div>

                <div class="column">
                    <input type="text" name="YearsOfStay" placeholder="Years of stay" required><br>
                </div>

                <div class="column">
                    <input type="text" name="Educational Attaintment" placeholder="Educational attaintment" required><br>
                </div>

                <div class="column">
                    <input type="text" name="MothersMaidenName" placeholder="Mothers Maiden Name" required><br>
                </div>

            </div>
            </div>
            </div>
            </div>
        </div> 

        <!-- Add more accordion sections as needed -->
        <button class="accordion">Employment Information</button>
        <div class="panel">
        <div class="row">
        <div class="column">
                    <input type="text" name="CpName" placeholder="Company Name(employment)" required><br>
                </div>
                <div class="column">
                    <input type="text" name="Position" placeholder="Position" required><br>
                </div>
                <div class="column">
                    <input type="text" name="OfficePhone" placeholder="Office Phone" required><br>
                </div>
                <div class="column">
                    <input type="text" name="OfficeAddress" placeholder="Office Address" required><br>
                </div>
                <div class="column">
                    <input type="text" name="OfficeZipCode" placeholder="Office zip code" required><br>
                </div>
                <div class="column">
                    <input type="text" name="YearsWithCurrentCompany" placeholder="Years With Current Company" required><br>
                </div>
                <div class="column">
                    <input type="text" name="TotalYearsWorking" placeholder="Total Years working" required><br>
                </div>
                <div class="column">
                    <input type="text" name="EmploymentStatus" placeholder="Employment Status" required><br>
                </div>
   <!-- Add more accordion sections as needed -->




        </div>
           </div>


           <button class="accordion">Financial Information</button>
        <div class="panel">
        <div class="row">
        <div class="column">
                    <input type="text" name="TIN" placeholder="TIN" required><br>
                </div>
                <div class="column">
                    <input type="text" name="SSS" placeholder="SSS" required><br>
                </div>
                <div class="column">
                    <input type="text" name="OtherIdCardType" placeholder="OtherIdCardType" required><br>
                </div>
                <div class="column">
                    <input type="text" name="OtherIdCardNo" placeholder="OtherIdCardNo" required><br>
                </div>
                <div class="column">
                    <input type="text" name="SourceOfFunds" placeholder="Source of Funds" required><br>
                </div>
                <div class="column">
                    <input type="text" name="NatureOfBusiness" placeholder="Nature of Business" required><br>
                </div>
                </div>
           </div>
   <!-- Add more accordion sections as needed -->

   <button class="accordion">Supplementary Information (1)</button>
        <div class="panel">
        <div class="row">
        <div class="column">
        <input type="text" name="SupplementaryLastName" placeholder="Supplementary Last Name" required><br>
        </div>
        <div class="column">
                    <input type="text" name="SupplementaryGivenName" placeholder="Supplementary Given Name" required><br>
                </div>
                <div class="column">
                    <input type="text" name="SupplementaryMiddleName" placeholder="Supplementary Middle Name" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="SupplementarySuffix" placeholder="Supplementary Suffix" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="SupplementaryEmbossingName" placeholder="Supplementary Embossing Name" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="SupplementaryDateOfBirth" placeholder="Supplementary Date of Birth" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="SupplementaryPlaceOfBirth" placeholder="Supplementary Place Of Birth" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="SupplementaryCitizenship" placeholder="Supplementary Citizenship" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="SupplementarySourceOfFund" placeholder="Supplementary Source of Fund" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="SupplementaryRelationshipWithPrincipal" placeholder="Supplementary Relationship With Principal" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="SupplementaryCreditLimit" placeholder="Supplementary Credit Limit" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="SupplementaryAddressAndZipCode" placeholder="Supplementary Address And ZipCode" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="SupplementaryPhoneNumber" placeholder="Supplementary Phone Number" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="SupplementaryMobileNumber" placeholder="Supplementary Mobile Number" required><br>
                </div> 

                





        </div>
        </div>
        </div>

        <button class="accordion">Supplementary Information (2)</button>
        <div class="panel">
        <div class="row">
        <div class="column">
        <input type="text" name="SupplementaryLastName" placeholder="Supplementary Last Name" required><br>
        </div>
        <div class="column">
                    <input type="text" name="Supplementary2GivenName" placeholder="Supplementary Given Name" required><br>
                </div>
                <div class="column">
                    <input type="text" name="Supplementary2MiddleName" placeholder="Supplementary Middle Name" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary2Suffix" placeholder="Supplementary Suffix" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary2EmbossingName" placeholder="Supplementary Embossing Name" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary2DateOfBirth" placeholder="Supplementary Date of Birth" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary2PlaceOfBirth" placeholder="Supplementary Place Of Birth" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary2Citizenship" placeholder="Supplementary Citizenship" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary2SourceOfFund" placeholder="Supplementary Source of Fund" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary2RelationshipWithPrincipal" placeholder="Supplementary Relationship With Principal" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary2CreditLimit" placeholder="Supplementary Credit Limit" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary2AddressAndZipCode" placeholder="Supplementary Address And ZipCode" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary2PhoneNumber" placeholder="Supplementary Phone Number" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary2MobileNumber" placeholder="Supplementary Mobile Number" required><br>
        </div>

        </div>
        </div>
        </div>
        <button class="accordion">Supplementary Information (3)</button>
        <div class="panel">
        <div class="row">
        <div class="column">
        <input type="text" name="Supplementary3LastName" placeholder="Supplementary Last Name" required><br>
        </div>
        <div class="column">
                    <input type="text" name="Supplementary3GivenName" placeholder="Supplementary Given Name" required><br>
                </div>
                <div class="column">
                    <input type="text" name="Supplementary3MiddleName" placeholder="Supplementary Middle Name" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary3Suffix" placeholder="Supplementary Suffix" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary3EmbossingName" placeholder="Supplementary Embossing Name" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary3DateOfBirth" placeholder="Supplementary Date of Birth" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary3PlaceOfBirth" placeholder="Supplementary Place Of Birth" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary3Citizenship" placeholder="Supplementary Citizenship" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary3SourceOfFund" placeholder="Supplementary Source of Fund" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary3RelationshipWithPrincipal" placeholder="Supplementary Relationship With Principal" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary3CreditLimit" placeholder="Supplementary Credit Limit" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary3AddressAndZipCode" placeholder="Supplementary Address And ZipCode" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary3PhoneNumber" placeholder="Supplementary Phone Number" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary3MobileNumber" placeholder="Supplementary Mobile Number" required><br>
        </div>

        </div>
        </div>
        </div>

        <button class="accordion">Supplementary Information (4)</button>
        <div class="panel">
        <div class="row">
        <div class="column">
        <input type="text" name="Supplementary4LastName" placeholder="Supplementary Last Name" required><br>
        </div>
        <div class="column">
                    <input type="text" name="Supplementary4GivenName" placeholder="Supplementary Given Name" required><br>
                </div>
                <div class="column">
                    <input type="text" name="Supplementary4MiddleName" placeholder="Supplementary Middle Name" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary4Suffix" placeholder="Supplementary Suffix" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary4EmbossingName" placeholder="Supplementary Embossing Name" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary4DateOfBirth" placeholder="Supplementary Date of Birth" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary4PlaceOfBirth" placeholder="Supplementary Place Of Birth" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary4Citizenship" placeholder="Supplementary Citizenship" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary4SourceOfFund" placeholder="Supplementary Source of Fund" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary4RelationshipWithPrincipal" placeholder="Supplementary Relationship With Principal" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary4CreditLimit" placeholder="Supplementary Credit Limit" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary4AddressAndZipCode" placeholder="Supplementary Address And ZipCode" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary4PhoneNumber" placeholder="Supplementary Phone Number" required><br>
                </div> 
                <div class="column">
                    <input type="text" name="Supplementary4MobileNumber" placeholder="Supplementary Mobile Number" required><br>
        </div>

        </div>
        </div>
        </div>














































        <div style="padding: 15px;">
            <button type="submit" name="add">Submit</button>
        </div>

    


 <!-- JavaScript for accordion functionality -->
 <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }

        </script>


    <?php
    include 'config.php';

    // Fetch users from the database
    $stmt = $pdo->query("SELECT * FROM mcc_transm");
    $trans = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Display users in a table
    if (count($trans) > 0) {
        echo "<h2>Transmital Form</h2>";
        echo "<table border='1'>";
        echo "<tr><th>CompanyName</th><th>CorrectDob<th>Leads</th></th><thLeads</th><th>LeadsID</th><th>ProductType</th><th>ToyotaDealer<th>Actions</th></tr></tr>";
        foreach ($trans as $trans) {
            echo "<tr>";
            echo "<td>{$trans['CompanyName']}</td>";
            echo "<td>{$trans['CorrectDob']}</td>";
            echo "<td>{$trans['Leads']}</td>";
            echo "<td>{$trans['LeadsID']}</td>";
            echo "<td>{$trans['ProductType']}</td>";
            echo "<td>{$trans['ToyotaDealer']}</td>";
            echo "<td>
                    <a href='edit_user.php?id={$trans['CompanyName']}'>TRANSMIT</a> | 
                    <a href='delete_user.php?id={$trans['CompanyName']}'>REWORK</a>
                  </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No users found.</p>";
    }
    ?>

</body>
</html>
