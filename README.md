# Event Management System (Laravel)

A Laravel application to manage events, attendees, and check-ins with capacity control.



## Features

- Create and manage events  
- Register attendees  
- Check-in attendees using  email  
- Prevent duplicate check-ins  
- Track remaining seats  
- Auto-delete check-ins when events are deleted  


## Tech Stack

- Laravel 
- PHP 
- MySQL  
- Blade Templates  


## Database Tables

- **events** → id, name, capacity, timestamps  
- **attendees** → id, name, email, timestamps  
- **check_ins** → id, event_id (FK), attendee_mail (FK), check_in (bool), timestamps  


## Usage

- Create events  
- Add attendees  
- Check-in attendees to events  
- View total check-ins and remaining spots  


