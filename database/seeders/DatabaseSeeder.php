<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create();

        /*  User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */ 

        Listing::create(
            [
                'title'=>'Mechanical Engineer',
                'tags'=>'AutoCAD, Trello, ANSYS',
                'company'=>'Aramco',
                'location'=>'Dhahran SA',
                'email'=>'info@aramco.com',
                'website'=>'aramco.com',
                'description'=>'Join Aramco as a Mechanical Engineer in Dhahran, SA. Utilize AutoCAD for design, ANSYS for simulation, and Trello for project management. Collaborate with multidisciplinary teams to develop innovative solutions, ensure reliability and efficiency, and manage project timelines. Ideal candidates hold a Bachelor’s degree in Mechanical Engineering and have experience with these tools. Contribute to our commitment to excellence and innovation in the energy sector.'
            ]
            );
            Listing::create([
                'title' => 'Electrical Engineer',
                'tags' => 'AutoCAD, MATLAB, PLC',
                'company' => 'Saudi Electricity Company',
                'location' => 'Riyadh SA',
                'email' => 'jobs@sec.com.sa',
                'website' => 'sec.com.sa',
                'description' => 'Saudi Electricity Company is seeking an Electrical Engineer in Riyadh, SA. Use AutoCAD for electrical design, MATLAB for analysis, and PLCs for control systems. Ensure system reliability and efficiency while collaborating with cross-functional teams. Candidates should have a degree in Electrical Engineering and relevant experience.'
            ]);
            
            Listing::create([
                'title' => 'Civil Engineer',
                'tags' => 'AutoCAD, SAP2000, MS Project',
                'company' => 'Saudi Aramco',
                'location' => 'Dhahran SA',
                'email' => 'careers@aramco.com',
                'website' => 'aramco.com',
                'description' => 'Saudi Aramco is hiring a Civil Engineer in Dhahran, SA. Responsibilities include structural design using AutoCAD and SAP2000, and project management with MS Project. Join a team dedicated to sustainable infrastructure projects.'
            ]);
            
            Listing::create([
                'title' => 'Project Manager',
                'tags' => 'PMP, MS Project, Agile',
                'company' => 'Saudi Telecom Company',
                'location' => 'Riyadh SA',
                'email' => 'hr@stc.com.sa',
                'website' => 'stc.com.sa',
                'description' => 'Saudi Telecom Company is looking for a Project Manager in Riyadh, SA. Manage projects using PMP methodologies, MS Project, and Agile practices. Lead teams to deliver high-quality telecom solutions on time and within budget.'
            ]);
            
            Listing::create([
                'title' => 'Software Developer',
                'tags' => 'Java, Spring, Docker',
                'company' => 'STC Solutions',
                'location' => 'Jeddah SA',
                'email' => 'recruitment@stcsolutions.com',
                'website' => 'stcsolutions.com',
                'description' => 'STC Solutions is seeking a Software Developer in Jeddah, SA. Develop applications using Java and Spring, and deploy with Docker. Collaborate with an innovative team to create robust software solutions.'
            ]);
            
            Listing::create([
                'title' => 'Chemical Engineer',
                'tags' => 'Aspen HYSYS, MATLAB, Process Simulation',
                'company' => 'SABIC',
                'location' => 'Jubail SA',
                'email' => 'careers@sabic.com',
                'website' => 'sabic.com',
                'description' => 'SABIC is hiring a Chemical Engineer in Jubail, SA. Perform process simulations using Aspen HYSYS and MATLAB. Join a team focused on innovation and sustainability in the chemical industry.'
            ]);
            
            Listing::create([
                'title' => 'Architect',
                'tags' => 'Revit, AutoCAD, SketchUp',
                'company' => 'Saudi Binladin Group',
                'location' => 'Mecca SA',
                'email' => 'jobs@binladin.com',
                'website' => 'binladin.com',
                'description' => 'Saudi Binladin Group is looking for an Architect in Mecca, SA. Design and develop architectural plans using Revit, AutoCAD, and SketchUp. Join a prestigious team working on landmark projects.'
            ]);
            
            Listing::create([
                'title' => 'Data Scientist',
                'tags' => 'Python, R, Machine Learning',
                'company' => 'Aramco',
                'location' => 'Dhahran SA',
                'email' => 'datascience@aramco.com',
                'website' => 'aramco.com',
                'description' => 'Join Aramco as a Data Scientist in Dhahran, SA. Utilize Python, R, and Machine Learning techniques to analyze data and drive insights. Collaborate with cross-functional teams to support data-driven decision making.'
            ]);
            
            Listing::create([
                'title' => 'Network Engineer',
                'tags' => 'Cisco, Network Security, VPN',
                'company' => 'Mobily',
                'location' => 'Riyadh SA',
                'email' => 'jobs@mobily.com.sa',
                'website' => 'mobily.com.sa',
                'description' => 'Mobily is seeking a Network Engineer in Riyadh, SA. Manage network infrastructure using Cisco technologies, enhance network security, and maintain VPN connections. Join a dynamic team to ensure robust and secure network operations.'
            ]);
            
            Listing::create([
                'title' => 'Financial Analyst',
                'tags' => 'Excel, Financial Modeling, SAP',
                'company' => 'Al Rajhi Bank',
                'location' => 'Riyadh SA',
                'email' => 'careers@alrajhibank.com.sa',
                'website' => 'alrajhibank.com.sa',
                'description' => 'Al Rajhi Bank is hiring a Financial Analyst in Riyadh, SA. Perform financial analysis using Excel, develop financial models, and manage financial data with SAP. Contribute to strategic financial planning and decision making.'
            ]);
            
    }
}
