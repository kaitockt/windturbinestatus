# Wind Turbine Status

## Requirements
>### Our task
>
>A wind turbine has 100 items on it, each gets inspected. Write an application that outputs numbers from 1 to 100, but for multiples of three print “Coating Damage” instead of the number and for the multiples of five print “Lightning Strike” instead of the number. For numbers which are multiples of both three and five print “Coating Damage and Lightning Strike” instead of the number.
>
>The code to generate the output should be done in PHP and the output should be rendered in HTML with a nice user experience. Share the code to us and show us what you can do.
>
>### Extra kudos for:
>
>1. A nice UI that makes the most of the output
>1. Pulling the inspection data down in an Ajax call and processing the results in the browser
>1. Putting the code in GitHub for us to see
>1. Getting it to run on a free AWS instance
>1. Sharing your plan and approach (any notes you made before coding started)
>1. Any future plans for how the application could be improved

## Demo on AWS instance
http://35.176.15.61/ or http://ec2-35-176-15-61.eu-west-2.compute.amazonaws.com/

## My Approach

1. There are at least 3 options in handling the inspection data:
    1. creating an array in php
    1. creating a database
    1. using ORM with Laravel
1. Considering the scale of the project, I deicded to keep it light-weight by avoiding using bulky framework if possible. I would also like the data to retain and shared by all users, so I decided to handle it with a database.
1. Since there is no relationship between tables required, the database is as simple as one table with 3 columns: (PK)id, (boolean)coating_dmg and (boolean)lightning_strike.
1. For the Front-End, there are 3 options which I considered about:
    1. Vanilla CSS
    2. Bootstap
    3. Tailwind CSS
1. Considering the scale of project, I decided not to spend too much time by writing vanilla CSS. The choice between Bootstap and Tailwind CSS was somewhat arbitary. I chose Tailwind CSS over Bootstap mostly due to personal perference.
2. Each row contains either 2 or 5 items, according to the width of browser.
3. Also considering the scale of project, I decided not to apply the MVC pattern. However, I created a class for Wind Turbine Items, to keep the code clean.
4. The procedure of the actual program is as follows:
    1. Get from the database the total number of existing rows.
    2. If there are not enough rows, insert as many as the difference. The default values for Coating Damage and Lightning Strike are false.
    3. Mark damages according to the requirement.
    4. Output the result.
5. As required, the above procedure are to be called by JavaScript through AJAX.
6. While jQuery is useful in handling AJAX connection, to keep the application light-weighted, I decided not to use it.

## Future Plans

1. Features for modifing status of Items, adding/removing items, adding new type of damages should be introduced.
2. Statistics showing the number of working items, damaged items, and each kind of damage could be displayed.
3. Alert the user when there is a damage reported / too many items are faulty.
4. Improve the UI


## How to Setup

1. Create a database in MySQL.
2. Edit 'classes/dbh.class.php' accordingly.
3. Run setup.php.
