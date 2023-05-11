const Grades = [5, 2.9, 3.8, 4, 5];
const average = Grades.reduce((a, b) => a + b, 0) / Grades.length; //gw69
const averageRounded = Math.round(average*2)/2 
console.log(average);
console.log(averageRounded)