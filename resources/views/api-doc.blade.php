<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Documentation - Night Buddy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        a {
            color: royalblue;
            text-decoration: none;
            font-size: 32px;
            transition: font-size 0.3s ease;
        }
        a:hover {
            color: royalblue;
            font-size: 42px;
        }

        h1 {
            color: royalblue;
            text-align: center;
            font-size: 32px;
            font-weight: bold;
        }

        .route-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        h2 {
            color: #007bff;
        }

        .route-item {
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        .method {
            font-weight: bold;
        }

        .example {
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<h1>API Documentation - <a href="/">Night Buddy</a></h1>

<p>Welcome to the API documentation for Night Buddy. Below you'll find details on how to interact with our API, including available routes, methods, and examples.</p>

<!-- Event Routes Section -->
<div class="route-container">
    <h2>Event Routes</h2>

    <div class="route-item">
        <h3>1. Get All Events</h3>
        <p class="method">Method: GET</p>
        <p>Endpoint: /events</p>
        <p>Description: Retrieve a list of all events.</p>
        <p>Example Request:</p>
        <div class="example">
            <code>GET http://nightbuddy2.test/api/events</code>
        </div>
        <p>Example Response:</p>
        <div class="example">
            <pre>[{"id":1,"name":"Rockair Festival","date":"2024-09-15","location":"Porrentruy, Suisse","theme_music":"Rock","created_at":"2024-12-18 21:00:00","updated_at":"2024-12-18 21:00:00"}]</pre>
        </div>
    </div>

    <div class="route-item">
        <h3>2. Get Event by ID</h3>
        <p class="method">Method: GET</p>
        <p>Endpoint: /events/{id}</p>
        <p>Description: Retrieve a specific event by its ID.</p>
        <p>Example Request:</p>
        <div class="example">
            <code>GET http://nightbuddy2.test/api/events/1</code>
        </div>
        <p>Example Response:</p>
        <div class="example">
            <pre>{"id":1,"name":"Rockair Festival","date":"2024-09-15","location":"Porrentruy, Suisse","theme_music":"Rock","created_at":"2024-12-18 21:00:00","updated_at":"2024-12-18 21:00:00"}</pre>
        </div>
    </div>

    <!-- Add more routes as needed -->
</div>

<!-- User Routes Section -->
<div class="route-container">
    <h2>User Routes</h2>

    <div class="route-item">
        <h3>3. Get All Users</h3>
        <p class="method">Method: GET</p>
        <p>Endpoint: /users</p>
        <p>Description: Retrieve a list of all users.</p>
        <p>Example Request:</p>
        <div class="example">
            <code>GET http://nightbuddy2.test/api/users</code>
        </div>
        <p>Example Response:</p>
        <div class="example">
            <pre>[{"id":1,"name":"Jean Dupont","email":"jean.dupont@example.com"}]</pre>
        </div>
    </div>

    <div class="route-item">
        <h3>4. Get User by ID</h3>
        <p class="method">Method: GET</p>
        <p>Endpoint: /users/{id}</p>
        <p>Description: Retrieve a specific user by their ID.</p>
        <p>Example Request:</p>
        <div class="example">
            <code>GET http://nightbuddy2.test/api/users/1</code>
        </div>
        <p>Example Response:</p>
        <div class="example">
            <pre>{"id":1,"name":"Jean Dupont","email":"jean.dupont@example.com"}</pre>
        </div>
    </div>

    <!-- Add more routes as needed -->
</div>

<!-- Carpooling Routes Section -->
<div class="route-container">
    <h2>Carpooling Routes</h2>

    <div class="route-item">
        <h3>5. Get Carpools by Event</h3>
        <p class="method">Method: GET</p>
        <p>Endpoint: events/{id}/carpools</p>
        <p>Description: Retrieve all carpools for a specific event.</p>
        <p>Example Request:</p>
        <div class="example">
            <code>GET http://nightbuddy2.test/api/events/1/carpools</code>
        </div>
        <p>Example Response:</p>
        <div class="example">
            <pre>[{"id":1,"event_id":1,"driver_id":1,"max_seats":4,"created_at":"2024-12-18 21:00:00","updated_at":"2024-12-18 21:00:00"},{"id":3,"event_id":1,"driver_id":3,"max_seats":5,"created_at":"2024-12-18 21:00:00","updated_at":"2024-12-18 21:00:00"}]</pre>
        </div>
    </div>

    <div class="route-item">
        <h3>6. Get Carpools with Passengers by Event</h3>
        <p class="method">Method: GET</p>
        <p>Endpoint: /carpooling</p>
        <p>Description: Retrieve all carpools along with their passengers for a specific event.</p>
        <p>Example Request:</p>
        <div class="example">
            <code>GET http://nightbuddy2.test/api/events/1/carpooling</code>
        </div>
        <p>Example Response:</p>
        <div class="example">
            <pre>[{"id":1,"event_id":1,"driver_id":1,"max_seats":4,"created_at":"2024-12-18 21:00:00","updated_at":"2024-12-18 21:00:00","driver":{"id":1,"name":"Jean Dupont"},"passengers":[{"id":2,"name":"Alice Berner"},{"id":3,"name":"Maxime Morel"}]},{"id":3,"event_id":1,"driver_id":3,"max_seats":5,"created_at":"2024-12-18 21:00:00","updated_at":"2024-12-18 21:00:00","driver":{"id":3,"name":"Maxime Morel"},"passengers":[{"id":1,"name":"Jean Dupont"}]}]</pre>
        </div>
    </div>

    <!-- Carpool Routes -->
    <div class="route-item">
        <h3>7. Create a Carpool</h3>
        <p class="method">Method: POST</p>
        <p>Endpoint: /carpools</p>
        <p>Description: Create a new carpool.</p>
        <p>Example Request:</p>
        <div class="example">
            <code>POST http://nightbuddy2.test/api/carpools</code>
        </div>
        <p>Example Request Body:</p>
        <div class="example">
            <pre>{
    "event_id": 1,
    "driver_id": 2,
    "max_seats": 3
}</pre>
        </div>
        <p>Example Response:</p>
        <div class="example">
            <pre>{"id":4,"event_id":1,"driver_id":2,"max_seats":3,"created_at":"2024-12-18 21:00:00","updated_at":"2024-12-18 21:00:00"}</pre>
        </div>
    </div>

    <div class="route-item">
        <h3>8. Add User to Carpool</h3>
        <p class="method">Method: POST</p>
        <p>Endpoint: /carpool-users/{id}</p>
        <p>Description: Add a user to a specific carpool.</p>
        <p>Example Request:</p>
        <div class="example">
            <code>POST http://nightbuddy2.test/api/carpool-users/4</code>
        </div>
        <p>Example Request Body:</p>
        <div class="example">
            <pre>{
    "user_id": 5
}</pre>
        </div>
        <p>Example Response:</p>
        <div class="example">
            <pre>{"id":4,"carpool_id":4,"user_id":5,"created_at":"2024-12-18 21:00:00","updated_at":"2024-12-18 21:00:00"}</pre>
        </div>
    </div>

    <div class="route-item">
        <h3>9. Remove User from Carpool</h3>
        <p class="method">Method: DELETE</p>
        <p>Endpoint: /carpool-users/{id}</p>
        <p>Description: Remove a user from a specific carpool.</p>
        <p>Example Request:</p>
        <div class="example">
            <code>DELETE http://nightbuddy2.test/api/events/carpool-users/4</code>
        </div>
        <p>Example Response:</p>
        <div class="example">
            <pre>{"message":"User removed from carpool successfully."}</pre>
        </div>
    </div>
</div>

</body>
</html>
