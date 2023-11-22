import { Chart } from "chart.js/auto";
import { getRelativePosition } from 'chart.js/helpers';
console.log("Execute");

const chart = new Chart(ctx, {
    type:"line",
    data : data,
});
document.getElementById("lineChart").value = chart;