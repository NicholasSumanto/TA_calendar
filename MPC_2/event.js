const monthContainer = document.querySelector(".month");
const dayContainer = document.querySelector(".day");

// get current date
const date = new Date();

// get current month
let currentMonth = date.getMonth();

// get current year
let currentYear = date.getFullYear();

// function to render month and day
function renderMonthAndDay() {
  monthContainer.innerHTML = months[currentMonth];
  dayContainer.innerHTML = days[date.getDay()];
}

renderMonthAndDay();