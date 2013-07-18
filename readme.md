## Simple Todo list

App to help me stop procrastinating.

Setup database for "todo" and edit config file in /app/config/database.php
Run composer install



### ToDo lol
- Create schema
- Create seeds
- List tasks
- Add tasks
- Edit tasks
- Tagging
- Delete tasks
- Filtering
- Administer Users


### Models
- Users (id, username,pass,email)
- Tasks (id, user_id, name, details, nodes, date_due, private, alarm, status) alarm:1month|1week|1day|1hour
- Tags (id, name) <- always lowercase
- TaskTags (id, task_id, tag_id)



Better on mobile, easily add form at top
Alarms-Email
Due Dates (ordering)
Tags instead of categories
Filter list by tag: Show only (chosen multiselect)
View someone else's tasks + assign them tasks
Make private tasks