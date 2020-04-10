<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            table {
                border-collapse: collapse;
		width:70%;
            }
		
            table, th, td {
                border: 1px solid black;
            }

            tr:nth-child(even) {background-color: #f2f2f2;}
        </style>
    </head>
    <body>
	<table>
	<tr>
		<th>Title</th>
		<th>First name</th>
		<th>Last name</th>
		<th>paper</th>
	</tr>
		<?php

		$submissions = App\Submission::all();

		foreach ($submissions as $paper) {
			echo "<tr>";
			echo "<td>" . $paper->title . "</td>";
			echo "<td>" . $paper->first_name . "</td>";
			echo "<td>" . $paper->last_name . "</td>";
			echo "<td><a href=\"Paper/" . $paper->paper . "\">Download</a></td>";
			echo "</tr>";
		}
		?>
	</table> 
    </body>
</html>
