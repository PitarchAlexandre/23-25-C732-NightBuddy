<h1>NightBuddy 🚗🎶</h1>

<p>As part of the <strong>C732</strong> (management) course, we were tasked with creating a project proposal and a Proof of Concept (POC). We decided to develop <strong>NightBuddy</strong>, a website and API for carpooling during nighttime events. The goal is to facilitate travel to events and encourage carpooling. The skills we gained in the <strong>C132-API</strong> course helped us achieve this objective.</p>

<p>Event organizers can integrate this API into their websites to encourage participants to carpool, making events more accessible while reducing the challenges of driving.</p>

<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://www.ismaail.com/uploads/9a30e503-e6ce-41ef-956a-a1cbb2e578b0/jCjnyX8N3Iro9jUw45bfeNWIuzq3RW-metaT1lTbmZDMnBzcUxudWR5bUtHV1pMZ0tTbXR6Q1NqMk8zYTBnakZXbS5wbmc=--large.webp" width="400" alt="Laravel Fortify Logos">
    </a>
</p>
<p><a href="https://laravel.com/docs/11.x/fortify" target="_blank">Fortify Documentation</a></p>
<p><a href="Doc/Presentation/video-demo-night-buddy.mkv">Link to Night Buddy demo video</a></p>

<hr>

<h2>Objectives</h2>

<ul>
    <li><strong>Facilitate nighttime travel</strong>: Manage carpooling for events. Simplify coordination between participants.</li>
    <li><strong>API for organizers</strong>: Create, manage, and share events via an API. A reusable solution for different types of events.</li>
    <li><strong>Customizable music themes</strong>: Organizers can configure musical themes according to their preferences.</li>
</ul>

<hr>

<h2>Main Features</h2>

<ul>
    <li><strong>Event creation and management</strong>: Add/edit events with names, locations, dates, and music themes.</li>
    <li><strong>Carpooling</strong>: Drivers - Offer rides. Participants - Book seats based on availability.</li>
    <li><strong>User management</strong>: Registration, login, and profiles.</li>
    <li><strong>Invitations</strong>: Send and track guest responses.</li>
</ul>

<hr>

<h2>Models</h2>
<p>Conceptual Data Model (CDM):</p>
<p align="center">
    <a href="Doc/Schemas/MCD.png">
        <img src="Doc/Schemas/MCD.png" alt="CDM - Conceptual Data Model" width="600">
    </a>
</p>
<p>Logical Data Model (LDM):</p>
<p align="center">
    <a href="Doc/Schemas/MLD.png">
        <img src="Doc/Schemas/MLD.png" alt="LDM - Logical Data Model" width="600">
    </a>
</p>
<p>Use Case:</p>
<p align="center">
    <a href="Doc/Schemas/use-case.png">
        <img src="Doc/Schemas/UseCase.png" alt="Use Case" width="600">
    </a>
</p>

<hr>

<h2>Technologies Used</h2>

<ul>
    <li><strong>Framework</strong>: Laravel 10.48.25</li>
    <li><strong>Authentication</strong>: Laravel Fortify</li>
    <li><strong>Database</strong>: MySQL</li>
    <li><strong>Organization</strong>: Kanban via Microsoft Teams</li>
</ul>

<hr>

<h2>What We Learned</h2>

<ul>
    <li><strong>Laravel</strong>: We learned to use Laravel alongside the project, thanks to the C132-API course. This project allowed us to solidify our knowledge.</li>
    <li><strong>Fortify</strong>: We used Fortify to simplify authentication. This library was easy to use and gave us a new skill that we had never used before.</li>
    <li><strong>Organization with Kanban</strong>: At the beginning, we lacked knowledge and used a Kanban board in Microsoft Teams to manage tasks step by step. This approach allowed us to progress gradually and add tasks as needed. We wouldn’t have been able to use a Gantt chart, for example, due to our initial lack of knowledge in planning tasks.</li>
    <li><strong>API and approach</strong>: We had the opportunity to strengthen our understanding of APIs.</li>
</ul>

<hr>

<h2>Missed Features (Future Enhancements)</h2> 
<ul> 
    <li><strong>Database modifications</strong>: To make the application fully functional, additional attributes and new tables were needed. For example, including users’ full addresses or creating an associative table for meeting points.</li>
    <li><strong>Google Maps integration</strong>: We aimed to integrate Google Maps for managing locations and carpooling routes but were constrained by costs. We explored free alternatives but couldn’t finalize this due to a lack of time.</li>
    <li><strong>Separation of API and web controllers</strong>: We should have separated API and web controllers for better route organization and management. This separation would have provided better modularity and clearer route handling. However, due to time constraints, we had to combine them.</li>
    <li><strong>Using Sanctum for API authentication</strong>: We considered using Sanctum, a library we learned in the C132 course, to secure APIs. This would have enabled simplified and secure authentication. However, we couldn’t implement Sanctum due to time constraints and costs related to Google Maps API.</li>
    <li><strong>Redirecting to appropriate pages</strong>: Upon registration or other actions on the site, users should have been redirected to relevant pages instead of directly displaying JSON responses. This would have improved navigation and provided a smoother user experience by showing confirmation messages or directing users to specific success or error pages. However, we left these redirections as they were to demonstrate the outcomes of each action.</li>
</ul>
 
<hr>

<h2>Conclusion</h2>
<p>This project was an enriching experience that helped us better understand the process of creating an API, structuring a project proposal, and working as a team with an agile tool like Kanban. We are satisfied with the outcome, particularly with learning Fortify and creating a functional API.</p>

<hr>

<h2>Contributors</h2>
<p>This project was developed by:</p>
<ul>
    <li>Kylian Di Gaetano</li>
    <li>Alexandre Pitarch</li>
</ul>

<h2>Project Setup</h2>

<h3>1. Clone the Repository</h3>
<p>Clone the Git repository from GitHub:</p>
<code>git clone https://github.com/PitarchAlexandre/23-25-C732-NightBuddy.git</code>

<h3>2. Install Dependencies</h3>
<p>Navigate to the project directory:</p>
<code>cd nightbuddy</code>
<p>Install dependencies with Composer:</p>
<code>composer install</code>

<h3>3. Environment Configuration</h3>
<p>Create a `.env` file based on the `.env.example` file:</p>
<code>cp .env.example .env</code>
<p>Configure your environment settings (database, API keys, etc.) by editing the `.env` file.</p>

<h3>4. Generate the Application Key</h3>
<p>Generate the application key required for encryption by running the following command:</p>
<code>php artisan key:generate</code>

<h3>5. Database Migration</h3>
<p>Run the migrations to create the database structure:</p>
<code>php artisan migrate</code>

<h3>6. Insert Data into the Database</h3> 
<p>Copy the SQL file located at <code>Web/public/inserer_donnees.sql</code>, then execute it in your MySQL management tool. This will automatically populate the database with the required data.</p>

<h3>7. Development Server</h3>
<p>Start your local server (e.g., Laragon, XAMPP, LAMP, or any other tool of your choice) to host the application:</p>
<p>Access the application through your browser at the corresponding address, usually: <a href="http://localhost">http://localhost</a></p>

<hr>

<h2>Note</h2> 
<p>The <strong>Doc</strong> folder contains large files, including a video and a PowerPoint presentation used during our demo. These files are available in the directory: \Doc\Presentation.</p>
