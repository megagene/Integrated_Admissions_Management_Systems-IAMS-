# Integrated Admission Management System (IAMS)

The Integrated Admission Management System (IAMS) is a comprehensive web application designed to streamline and integrate all admission departments at Prempeh College. By providing a unified platform, IAMS eliminates the challenges faced by applicants and students during the registration process, offering a seamless experience from application to acceptance.

## Installation

1. **Download and Install XAMPP:**
   - Ensure you have XAMPP installed on your system. If not, download it from [https://www.apachefriends.org/]

2. **Place IAMS in htdocs:**
   - Clone or download the IAMS repository and place the entire folder in the 'htdocs' directory of your XAMPP installation.

3. **Start XAMPP Control Panel:**
   - Open the 'XAMPP Control Panel' and start the Apache server.

4. **Database Setup:**
   - Open a web browser and navigate to `localhost/phpmyadmin`.
   - Create a new database named `courage_school_system`.
   - Locate the `courage_school_system.sql` file in the IAMS folder and import it into the newly created database.

5. **Run IAMS:**
   - Open a web browser and go to `localhost/iams` to access the Integrated Admission Management System.

## Usage

### Admins
   - Log in using the provided admin credentials from the database.
   - Navigate through the system to manage and oversee the admission process.

### Applicants
   - Use one of the vouchers from the database to access the applicant section.
   - Sign up and log in using your sign up details.
   - Naviagte the 'Start new appliaction' and complete the application process.
   - Once application is submitted, admin has privilege to approve admission. Once the admin approves the application,               
     navigate to 'View Admissions Status'and download the admission form containing the student logins.

### Students
   - log into the student portal with the provided student credentials.
   - Complete necessary requirements such as course registration and fee payments.
   - At the student dashboard, the student has the ability to view payment receipts, course registration forms,   
     examination results, and other necessary information

## Important Notes
- This system is exclusively for use by Prempeh College during the admission process.
- For detailed information on system functionalities, refer to the user manuals or contact the system administrators.

