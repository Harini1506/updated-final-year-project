<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company List</title>
    <link rel="stylesheet" href="style.css">
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: white;
    }
    h1 {
        font-size: 36px;
        color: #941717;  
    }
    .recent-job-list {
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transform: translateY(20px);
        transition: opacity 0.5s, transform 0.5s;
    }
    .recent-job-list:hover {
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }
    .job-title {
        font-size: 20px;
        color: #941717;
        margin-bottom: 10px;
    }

    .job-description {
        margin-top: 10px;
        margin-bottom: 20px;
        font-size: 14px;
        color: #6c757d;
    }

    .job-apply-button {
        background: #941717;
        padding: 10px 20px;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        
    }

    .job-apply-button:hover {
        background: #941717;
    }

    

    .company-list {
           
            background-color: white;
        
        }

        .recent-job-heading,
        .recent-job-sub-heading {
            text-align: center;
            color: #941717;
        }

        .recent-job-list {
            float: left;
            background-color: white;
            padding: 20px;
            margin-left: 10px;
            margin-right: 10px;
            margin-bottom: 20px;
           
            box-sizing: border-box;
        }

        .job-title {
            font-size: 20px;
        }

        .job-company {
            margin-top: 10px;
            margin-bottom: 10px; 
        }

        .job-company i {
            color: orange;
            margin-left: 10px;
        }

        .job-skill {
            margin-top: 10px; 
            margin-bottom: 10px;
            font-size: 16px;
        }

       
        @media (max-width: 767px) {
            .recent-job-list {
                width: 100%;
                margin-left: 0;
                margin-right: 0;
            }
        }

    </style>
</head>
<body>
<iframe
      id="myIframe"
      src="nav.html"
      style="height: 200px; width: 100%; border: none"
    ></iframe>

    <script>
      function resizeIframe() {
        const iframe = document.getElementById("myIframe");
        iframe.style.height =
          iframe.contentWindow.document.documentElement.scrollHeight + "px";
      }

      window.addEventListener("load", resizeIframe);
      window.addEventListener("resize", resizeIframe);
    </script>
    <div class="company-list">
        <div class="container">
            <h1>Company List</h1>
            <?php
           
            $host = "localhost";
            $user = "root";
            $password = "";
            $database = "placement_application";
            $conn = mysqli_connect($host, $user, $password, $database);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM company_register";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                die("Query failed: " . mysqli_error($conn));
            }

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="width-50">';
                echo '<div class="recent-job-list">';
                echo '<div class="width-100">';
                echo '<h4 class="job-title">' . $row['job_position'] . '</h4>';
                echo '<p class="job-company">';
                echo $row['company_name'];
                echo '</p>';
                echo '</div>';

                foreach ($row as $key => $value) {
                    if ($key !== 'job_position' && $key !== 'company_name' && $key !== 'company_address' && $key !== 'job_description') {
                        if ($key === 'interview_preferences') {
                            echo '<div class="width-33">';
                            echo '<strong>Interview Date:</strong> ' . date('d-m-Y', strtotime($value));
                            echo '</div>';
                        } else {
                            echo '<div class="width-33">';
                            echo '<strong>' . ucfirst(str_replace('_', ' ', $key)) . ':</strong> ' . $value;
                            echo '</div>';
                        }
                    }
                }

                echo '<div class="width-100">';
                echo '<p class="job-skill">';
                echo '<b>Skills : </b>'; // Add dynamic skills if available
                echo '</p>';
                echo '</div>';

                // Job Description
                echo '<div class="width-100 job-description">';
                echo '<strong>Job Description:</strong> ' . $row['job_description'];
                echo '</div>';

                echo '<div class="width-100">';
                echo '<a href="#" class="job-apply-button">Apply Now</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }

            // Close the connection
            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>
</html>
