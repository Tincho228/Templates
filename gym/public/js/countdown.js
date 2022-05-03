/* Obtaining values from the user */
var dateString = document.getElementById('counter').dataset.date;
var planString = document.getElementById('counter').dataset.plan;


var plan = parseInt(planString) /* Expiring plan - 6 months*/
console.log
var info = dateString.split('-');
var year_created = parseInt(info[0]);
var month_created = parseInt(info[1]);
var day_created = parseInt(info[2]);
var day_expiration, month_expiration,year_expiration;

/* Expiring plan - 6 months*/
if ((month_created+plan)>12){
    month_expiration = month_created+plan-12
    year_expiration = year_created + 1
}else {
    month_expiration = month_created + plan
    year_expiration = year_created    
}

day_expiration = day_created

//var month_expiration = month_created + plan
//var year_expiration = year_created

simplyCountdown('#counter', {
    // year: 2022, // required
    year: year_expiration,
    month: month_expiration, // required
    day: day_expiration, // required
    hours: 10, // Default is 0 [0-23] integer
    minutes: 31 , // Default is 0 [0-59] integer
    seconds: 0, // Default is 0 [0-59] integer
    words: { //words displayed into the countdown
        days: { singular: 'Dia', plural: 'dias' },
        hours: { singular: 'hora', plural: 'horas' },
        minutes: { singular: 'minuto', plural: 'minutos' },
        seconds: { singular: 'segundo', plural: 'segundos' }
    },
    plural: true, //use plurals
    inline: false, //set to true to get an inline basic countdown like : 24 days, 4 hours, 2 minutes, 5 seconds
    inlineClass: 'simply-countdown-inline', //inline css span class in case of inline = true
    // in case of inline set to false
    enableUtc: false, //Use UTC or not - default : false
    onEnd: function() {
        var counter_alert = document.getElementById('counter_alert');
        counter_alert.style.display = 'block';
        return }, //Callback on countdown end, put your own function here
    refresh: 1000, // default refresh every 1s
    sectionClass: 'simply-section', //section css class
    amountClass: 'simply-amount', // amount css class
    wordClass: 'simply-word', // word css class
    zeroPad: false,
    countUp: false
});
