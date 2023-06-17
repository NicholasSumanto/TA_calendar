<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="index.css" />

    <!-- FONT -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <title>Mini Calendar</title>
  </head>
  <header>
    <h2 class="logo">Top Secret</h2>
    <div class="menu">
      <a href="profile.php">Profile</a>
      <a href="event.php">Event</a>
      <a href="logout.php" class="btnLogin-popup">Logout</a>
    </div>
  </header>
  <body>
    <div class="container">
      <div class="calendar">
        <div class="header">
          <div class="month"></div>
          <div class="btns">
            <div class="btn today-btn">
              <i class="fas fa-calendar-day"></i>
            </div>
            <div class="btn prev-btn">
              <i class="fas fa-chevron-left"></i>
            </div>
            <div class="btn next-btn">
              <i class="fas fa-chevron-right"></i>
            </div>
          </div>
        </div>
        <div class="weekdays">
          <div class="day">Sun</div>
          <div class="day">Mon</div>
          <div class="day">Tue</div>
          <div class="day">Wed</div>
          <div class="day">Thu</div>
          <div class="day">Fri</div>
          <div class="day">Sat</div>
        </div>
        <div class="days">
        </div>
        <div class="todo-list">
      <h3>To-Do List</h3>
      <ul>
        <li>Task 1</li>
        <li>Task 2</li>
        <li>Task 3</li>
      </ul>
    </div>
      </div>
    </div>
    
<footer>
  <p> &copy; TopSecret</p>
</footer>

    <!-- SCRIPT -->
    <script src="script.js"></script>
  </body>
</html>
