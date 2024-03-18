1. Create a users and tickets table. The relationship would be that a user can have many tickets but a ticket belongs to one user.
2. For the users table have the following fields:
. Name
. Email
. Timestamps

For the tickets table have the following fields:
. subject
. content
. user_id (We can get the name and email of the user who submitted the ticket by joining onto the users table with this column)
. user_name
. user_email
. status
. Time stamps

3. Create model files for the users and tickets tables.
4. use factory to generate dummy data
5. create a console command that generates dummy data using the factory every minute.
6. create a similar command that generates a ticket every 5 minutes.
7. For the end points:
. Add the end point for the api's.
. Create controllers for users and tickets to grab the required results for each end point.