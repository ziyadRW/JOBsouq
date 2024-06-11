<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a user
       // User::factory(5)->create();

       $user = User::factory()->create([
        'name' => 'Ziyad ',
        'email' => 'test@example.com',
        'password' => '123456'
         ]);

        Listing::create(
            [
                'title' => 'Software Engineer',
                'tags' => 'Java, Spring Boot, REST APIs, SQL, Agile',
                'company' => 'Aramco',
                'location' => 'Dhahran SA',
                'email' => 'careers@aramco.com',
                'website' => 'aramco.com',
                'description' => 'Join Aramco as a Software Engineer in Dhahran, SA. Work with Java, Spring Boot, and REST APIs to develop robust applications. Collaborate in an Agile environment to deliver high-quality solutions. Ideal candidates hold a Bachelor’s degree in Computer Science and have experience in software development.',
                'user_id' => $user->id
            ]
        );
        
        Listing::create(
            [
                'title' => 'Data Analyst',
                'tags' => 'Python, SQL, Tableau, Data Visualization, Data Analysis',
                'company' => 'SABIC',
                'location' => 'Riyadh SA',
                'email' => 'careers@sabic.com',
                'website' => 'sabic.com',
                'description' => 'SABIC is looking for a Data Analyst in Riyadh, SA. Analyze large datasets using Python and SQL, and create insightful reports with Tableau. Support business decisions with data-driven insights. Ideal candidates have strong analytical skills and experience in data analysis.',
                'user_id' => $user->id
            ]
        );
        
        Listing::create(
            [
                'title' => 'Network Engineer',
                'tags' => 'Cisco, Networking, Firewalls, VPN, Network Security',
                'company' => 'STC',
                'location' => 'Jeddah SA',
                'email' => 'careers@stc.com.sa',
                'website' => 'stc.com.sa',
                'description' => 'STC is hiring a Network Engineer in Jeddah, SA. Manage and troubleshoot network infrastructure, ensuring security and efficiency. Experience with Cisco equipment and network security practices is required. Ideal candidates hold relevant certifications and have hands-on experience.',
                'user_id' => $user->id
            ]
        );
        
        Listing::create(
            [
                'title' => 'Business Analyst',
                'tags' => 'Business Analysis, Requirements Gathering, Agile, UML',
                'company' => 'Al Rajhi Bank',
                'location' => 'Riyadh SA',
                'email' => 'careers@alrajhibank.com.sa',
                'website' => 'alrajhibank.com.sa',
                'description' => 'Al Rajhi Bank is seeking a Business Analyst in Riyadh, SA. Gather and analyze business requirements, ensuring alignment with strategic goals. Experience with Agile methodologies and UML is a plus. Ideal candidates hold a Bachelor’s degree in Business Administration or related field.',
                'user_id' => $user->id
            ]
        );
        
        Listing::create(
            [
                'title' => 'Systems Administrator',
                'tags' => 'Windows Server, Linux, Virtualization, VMware, ITIL',
                'company' => 'Saudi Airlines',
                'location' => 'Jeddah SA',
                'email' => 'careers@saudia.com',
                'website' => 'saudia.com',
                'description' => 'Saudi Airlines is looking for a Systems Administrator in Jeddah, SA. Manage server infrastructure to ensure high availability and performance. Experience with Windows Server, Linux, and VMware is required. Ideal candidates hold relevant certifications and have experience in system administration.',
                'user_id' => $user->id
            ]
        );
        
        Listing::create(
            [
                'title' => 'Marketing Specialist',
                'tags' => 'Marketing, Social Media, Content Creation, SEO',
                'company' => 'Almarai',
                'location' => 'Riyadh SA',
                'email' => 'careers@almarai.com',
                'website' => 'almarai.com',
                'description' => 'Almarai is seeking a Marketing Specialist in Riyadh, SA. Enhance brand presence online through content creation and social media management. Experience with SEO is a plus. Ideal candidates hold a Bachelor’s degree in Marketing or related field and have experience in digital marketing.',
                'user_id' => $user->id
            ]
        );
        
        Listing::create(
            [
                'title' => 'Financial Analyst',
                'tags' => 'Financial Analysis, Excel, SAP, Accounting, Reporting',
                'company' => 'Riyad Bank',
                'location' => 'Riyadh SA',
                'email' => 'careers@riyadbank.com',
                'website' => 'riyadbank.com',
                'description' => 'Riyad Bank is hiring a Financial Analyst in Riyadh, SA. Perform detailed financial analysis and prepare reports to support decision-making. Proficiency in Excel and SAP is essential. Ideal candidates hold a Bachelor’s degree in Finance or Accounting.',
                'user_id' => $user->id
            ]
        );
        
        Listing::create(
            [
                'title' => 'Petroleum Engineer',
                'tags' => 'Petroleum Engineering, Reservoir Management, Drilling, Production',
                'company' => 'Saudi Aramco',
                'location' => 'Dhahran SA',
                'email' => 'careers@aramco.com',
                'website' => 'aramco.com',
                'description' => 'Saudi Aramco is seeking a Petroleum Engineer in Dhahran, SA. Manage reservoirs and drilling operations. Experience in the oil and gas industry is required. Ideal candidates hold a Bachelor’s degree in Petroleum Engineering.',
                'user_id' => $user->id
            ]
        );
        
        Listing::create(
            [
                'title' => 'Customer Service Representative',
                'tags' => 'Customer Service, Communication Skills, CRM, Problem Solving',
                'company' => 'Mobily',
                'location' => 'Riyadh SA',
                'email' => 'careers@mobily.com.sa',
                'website' => 'mobily.com.sa',
                'description' => 'Mobily is looking for a Customer Service Representative in Riyadh, SA. Handle customer inquiries and resolve issues efficiently. Experience with CRM software is a plus. Ideal candidates have excellent communication skills and problem-solving abilities.',
                'user_id' => $user->id
            ]
        );
        
        Listing::create(
            [
                'title' => 'Sales Associate',
                'tags' => 'Sales, Customer Service, Retail, POS Systems',
                'company' => 'Jarir Bookstore',
                'location' => 'Riyadh SA',
                'email' => 'careers@jarirbookstore.com',
                'website' => 'jarir.com',
                'description' => 'Jarir Bookstore is hiring a Sales Associate in Riyadh, SA. Assist customers, manage sales transactions, and ensure high customer satisfaction. Previous retail experience is a plus. Ideal candidates have strong interpersonal skills and a passion for sales.',
                'user_id' => $user->id
            ]
        );
        
        Listing::create(
            [
                'title' => 'Nurse',
                'tags' => 'Nursing, Patient Care, BLS, ACLS, Healthcare',
                'company' => 'King Faisal Specialist Hospital',
                'location' => 'Riyadh SA',
                'email' => 'careers@kfshrc.edu.sa',
                'website' => 'kfshrc.edu.sa',
                'description' => 'King Faisal Specialist Hospital is seeking a Nurse in Riyadh, SA. Provide high-quality patient care and support. Certification in BLS and ACLS is required. Ideal candidates hold a nursing degree and have experience in a healthcare setting.',
                'user_id' => $user->id
            ]
        );
        
        Listing::create(
            [
                'title' => 'Risk Manager',
                'tags' => 'Risk Management, Compliance, Financial Services, Analysis',
                'company' => 'SABB',
                'location' => 'Riyadh SA',
                'email' => 'careers@sabb.com',
                'website' => 'sabb.com',
                'description' => 'SABB is hiring a Risk Manager in Riyadh, SA. Identify, assess, and manage risks within the organization, ensuring compliance with regulatory requirements. Strong analytical skills are essential. Ideal candidates hold a Bachelor’s degree in Risk Management or related field.',
                'user_id' => $user->id
            ]
        );
        
        Listing::create(
            [
                'title' => 'Digital Marketing Specialist',
                'tags' => 'Digital Marketing, SEO, SEM, Social Media, Analytics',
                'company' => 'Zain',
                'location' => 'Riyadh SA',
                'email' => 'careers@sa.zain.com',
                'website' => 'sa.zain.com',
                'description' => 'Zain is looking for a Digital Marketing Specialist in Riyadh, SA. Develop and execute digital marketing campaigns to enhance our online presence. Experience with SEO, SEM, and analytics tools is required. Ideal candidates hold a Bachelor’s degree in Marketing or related field.',
                'user_id' => $user->id
            ]
        );
        Listing::create(
            [
                'title' => 'Full Stack Developer',
                'tags' => 'JavaScript, Node.js, React, MongoDB',
                'company' => 'Manafa',
                'location' => 'Riyadh SA',
                'email' => 'careers@manafa.com',
                'website' => 'manafa.com',
                'description' => 'Manafa, a leading Saudi fintech company, is looking for a Full Stack Developer to join our team in Riyadh, SA. Work with JavaScript, Node.js, and React to build scalable web applications. Experience with MongoDB is a plus. Ideal candidates have a passion for fintech and hold a Bachelor’s degree in Computer Science or related field.',
                'user_id' => $user->id
            ]
        );
        
        Listing::create(
            [
                'title' => 'Blockchain Developer',
                'tags' => 'Blockchain, Solidity, Ethereum, Smart Contracts',
                'company' => 'Sukuk',
                'location' => 'Jeddah SA',
                'email' => 'careers@sukuk.com',
                'website' => 'sukuk.com',
                'description' => 'Sukuk, a Saudi fintech company, is seeking a Blockchain Developer in Jeddah, SA. Develop and deploy smart contracts using Solidity on the Ethereum platform. Ideal candidates have experience in blockchain technology and a strong understanding of decentralized finance. A Bachelor’s degree in Computer Science or a related field is preferred.',
                'user_id' => $user->id
            ]
        );
        
        Listing::create(
            [
                'title' => 'UI/UX Designer',
                'tags' => 'UI/UX Design, Figma, Sketch, Adobe XD, User Research',
                'company' => 'Wasla',
                'location' => 'Riyadh SA',
                'email' => 'careers@wasla.com',
                'website' => 'wasla.com',
                'description' => 'Wasla, a Saudi UX/UI studio, is looking for a talented UI/UX Designer to join our team in Riyadh, SA. Utilize tools like Figma, Sketch, and Adobe XD to create user-friendly designs. Conduct user research and usability testing to inform design decisions. Ideal candidates have a strong portfolio and a passion for creating exceptional user experiences.',
                'user_id' => $user->id
            ]
        );
        
    }
}
    