-- Create the database if it does not exist and switch to it
CREATE DATABASE IF NOT EXISTS upakoconnect_db;
USE upakoconnect_db;

-- Create 'User' table first since other tables reference it
CREATE TABLE User (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone_number VARCHAR(20),
    password VARCHAR(255) NOT NULL,
    role VARCHAR(50),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Create 'Patient' table (references User via created_by)
CREATE TABLE Patient (
    patient_id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    dob DATE,
    phone_number VARCHAR(20),
    address VARCHAR(255),
    national_id VARCHAR(50),
    status VARCHAR(50),
    expected_delivery_date DATE,
    actual_delivery_date DATE,
    created_by INT,
    CONSTRAINT fk_patient_created_by FOREIGN KEY (created_by) REFERENCES User(user_id)
) ENGINE=InnoDB;

-- Create 'IntlMember' table; referenced by CommunicationLog and IntlActivity
CREATE TABLE IntlMember (
    member_id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    email VARCHAR(100),
    country VARCHAR(100),
    city VARCHAR(100),
    local_church_name VARCHAR(100),
    coordinator_name VARCHAR(100),
    join_date DATE,
    active_status TINYINT(1) DEFAULT 1
) ENGINE=InnoDB;

-- Create 'Module' table; referenced by UserModuleAccess
CREATE TABLE Module (
    module_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    status VARCHAR(50)
) ENGINE=InnoDB;

-- Create 'Document' table (references Patient and User)
CREATE TABLE Document (
    document_id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT NOT NULL,
    title VARCHAR(255),
    file_path VARCHAR(255),
    uploaded_by INT,
    upload_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_document_patient FOREIGN KEY (patient_id) REFERENCES Patient(patient_id),
    CONSTRAINT fk_document_uploaded_by FOREIGN KEY (uploaded_by) REFERENCES User(user_id)
) ENGINE=InnoDB;

-- Create 'PostnatalVisit' table (references Patient)
CREATE TABLE PostnatalVisit (
    visit_id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT NOT NULL,
    visit_date DATE,
    notes TEXT,
    referrals TEXT,
    counseling_done TINYINT(1),
    CONSTRAINT fk_postnatal_patient FOREIGN KEY (patient_id) REFERENCES Patient(patient_id)
) ENGINE=InnoDB;

-- Create 'HealthRecord' table (references Patient)
CREATE TABLE HealthRecord (
    record_id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT NOT NULL,
    record_date DATE,
    type VARCHAR(50),
    description TEXT,
    value VARCHAR(100),
    CONSTRAINT fk_healthrecord_patient FOREIGN KEY (patient_id) REFERENCES Patient(patient_id)
) ENGINE=InnoDB;

-- Create 'Baby' table (references Patient)
CREATE TABLE Baby (
    baby_id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT NOT NULL,
    name VARCHAR(100) NOT NULL,
    sex VARCHAR(10),
    birth_weight DECIMAL(5,2),
    birth_date DATE,
    birth_place VARCHAR(100),
    notes TEXT,
    CONSTRAINT fk_baby_patient FOREIGN KEY (patient_id) REFERENCES Patient(patient_id)
) ENGINE=InnoDB;

-- Create 'AntenatalVisit' table (references Patient)
CREATE TABLE AntenatalVisit (
    visit_id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT NOT NULL,
    visit_date DATE,
    blood_pressure VARCHAR(20),
    weight DECIMAL(5,2),
    hemoglobin_level DECIMAL(4,2),
    notes TEXT,
    next_visit_date DATE,
    CONSTRAINT fk_antenatal_patient FOREIGN KEY (patient_id) REFERENCES Patient(patient_id)
) ENGINE=InnoDB;

-- Create 'Appointment' table (references Patient and User)
CREATE TABLE Appointment (
    appointment_id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT NOT NULL,
    user_id INT NOT NULL,
    appointment_date DATETIME,
    type VARCHAR(50),
    status VARCHAR(50),
    notes TEXT,
    CONSTRAINT fk_appointment_patient FOREIGN KEY (patient_id) REFERENCES Patient(patient_id),
    CONSTRAINT fk_appointment_user FOREIGN KEY (user_id) REFERENCES User(user_id)
) ENGINE=InnoDB;

-- Create 'CounselingSession' table (references Patient and User)
CREATE TABLE CounselingSession (
    session_id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT NOT NULL,
    user_id INT NOT NULL,
    session_date DATE,
    topic VARCHAR(100),
    notes TEXT,
    CONSTRAINT fk_counseling_patient FOREIGN KEY (patient_id) REFERENCES Patient(patient_id),
    CONSTRAINT fk_counseling_user FOREIGN KEY (user_id) REFERENCES User(user_id)
) ENGINE=InnoDB;

-- Create 'UserModuleAccess' table (references User and Module)
CREATE TABLE UserModuleAccess (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    module_id INT NOT NULL,
    role VARCHAR(50),
    CONSTRAINT fk_moduleaccess_user FOREIGN KEY (user_id) REFERENCES User(user_id),
    CONSTRAINT fk_moduleaccess_module FOREIGN KEY (module_id) REFERENCES Module(module_id)
) ENGINE=InnoDB;

-- Create 'CommunicationLog' table (references IntlMember and User)
CREATE TABLE CommunicationLog (
    log_id INT AUTO_INCREMENT PRIMARY KEY,
    member_id INT NOT NULL,
    user_id INT NOT NULL,
    type VARCHAR(50),
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    message_summary TEXT,
    CONSTRAINT fk_commlog_member FOREIGN KEY (member_id) REFERENCES IntlMember(member_id),
    CONSTRAINT fk_commlog_user FOREIGN KEY (user_id) REFERENCES User(user_id)
) ENGINE=InnoDB;

-- Create 'IntlActivity' table (references IntlMember)
CREATE TABLE IntlActivity (
    activity_id INT AUTO_INCREMENT PRIMARY KEY,
    member_id INT NOT NULL,
    date DATE,
    activity_type VARCHAR(50),
    notes TEXT,
    CONSTRAINT fk_intlactivity_member FOREIGN KEY (member_id) REFERENCES IntlMember(member_id)
) ENGINE=InnoDB;
