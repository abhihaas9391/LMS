#[ Learning Management System (LMS)](https://abhihaas9391.github.io/LMS/)

## Overview
This is a Learning Management System (LMS) built using PHP. The system provides a platform for students and teachers to interact through courses, video playlists, and profile management. It features separate login portals for administrators, teachers, and students.

## Features
- **Admin Panel**: Allows administrators to manage users, courses, and content efficiently.
- **Teacher Login & Dashboard**:
  - Teachers can create and manage courses.
  - Profile management for teachers.
  - Contact and about sections specific to teachers.
- **Student Login & Dashboard**:
  - Students can browse available courses.
  - Watch videos and access playlists.
  - Manage personal profiles.
- **User Authentication**:
  - Secure login and registration.
  - Password reset and update options.
- **Course Management**:
  - Teachers can create and update courses.
  - Students can enroll and access course content.
- **Contact and About Pages**: Informational pages for students and teachers.

## Technologies Used
- PHP
- MySQL (Database)
- HTML, CSS, JavaScript

## File Structure
The project consists of the following PHP files:

- `index.php` - Entry point for the application.
- `home.php` - Home page for students.
- `about.php`, `contact.php` - Informational pages.
- `courses.php` - Displays available courses.
- `playlist.php` - Video playlist management.
- `profile.php` - Student profile management.
- `register.php`, `register2.php`, `register_teacher.php` - Registration pages for students and teachers.
- `forgot_password.php`, `reset_password.php` - User authentication.
- `teacherhome.php`, `teacherabout.php`, `teachercontact.php`, `teachercourses.php`, `teacherprofile.php` - Teacher-specific pages.
- `teachers.php` - Displays a list of teachers.
- `teacherupdate.php`, `update.php` - Profile and account updates.
- `watch-video.php` - Video playback functionality.
- `connect.php` - Database connection.

## Installation & Usage
1. Clone the repository:
   ```sh
   git clone https://github.com/abhihaas9391/LMS.git
   cd LMS
   ```
2. Import the database (`.sql` file) into MySQL.
3. Configure database credentials in `connect.php`.
4. Run the project on a local server (XAMPP, WAMP, etc.).

## Requirements
- PHP 7.x or higher
- MySQL Database
- Apache Server (XAMPP/WAMP recommended)
- 
## Contributing
Contributions are welcome! Feel free to submit issues and pull requests.


