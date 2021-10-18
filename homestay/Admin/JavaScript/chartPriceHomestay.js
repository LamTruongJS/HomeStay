
//getData
let listamounts = document.querySelectorAll(".amount")
let arrayamount =[]
listamounts.forEach(function(listamount) {
  return arrayamount.push(listamount)
})
var arraryListamount = arrayamount.map(function(listamount) {
  return listamount.innerHTML
})

//get tiêu đề
let listnameCitys = document.querySelectorAll(".nameCity")
let arraynameCity =[]
listnameCitys.forEach(function(listnameCity) {
  return arraynameCity.push(listnameCity)
})
var arraryListnameCity = arraynameCity.map(function(listnameCity) {
  return listnameCity.innerHTML
})
// Chart bar
    var myChartBar = document.querySelector('#myChartBar').getContext('2d');
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    configBar= {
      type:'bar', // bar, horizontalBar, pie, line, HorizontalBar, radar, polarArea
      data:{
        labels:[ 
          `${arraryListnameCity[0]}`,
          `${arraryListnameCity[1]}`,
          `${arraryListnameCity[2]}`,
          `${arraryListnameCity[3]}`,
          `${arraryListnameCity[4]}`,
          `${arraryListnameCity[5]}`,
          `${arraryListnameCity[6]}`,
          `${arraryListnameCity[7]}`,
          `${arraryListnameCity[8]}`,
          `${arraryListnameCity[9]}`,
        ],
        datasets:[{
          label:'Giá tiền ',
          data:[
            `${arraryListamount[0]}`,
            `${arraryListamount[1]}`,
            `${arraryListamount[2]}`,
            `${arraryListamount[3]}`,
            `${arraryListamount[4]}`,
            `${arraryListamount[5]}`,
            `${arraryListamount[6]}`,
            `${arraryListamount[7]}`,
            `${arraryListamount[8]}`,
            `${arraryListamount[9]}`,
           
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(11, 232, 129,1.0)',
            'rgba(11, 232, 129,1.0)',
            'rgba(11, 232, 129,1.0)',
            'rgba(11, 232, 129,1.0)',
            'rgba(11, 232, 129,1.0)',
            'rgba(11, 232, 129,1.0)',
            'rgba(11, 232, 129,1.0)',
            'rgba(11, 232, 129,1.0)',
            'rgba(11, 232, 129,1.0)',
            'rgba(11, 232, 129,1.0)',
           
           
          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:[
            'rgba(11, 232, 129,1.0)',
            'rgba(11, 232, 129,1.0)',
            'rgba(11, 232, 129,1.0)',
            'rgba(11, 232, 129,1.0)',
            'rgba(11, 232, 129,1.0)',
            'rgba(11, 232, 129,1.0)',
            'rgba(11, 232, 129,1.0)',
            'rgba(11, 232, 129,1.0)',
            'rgba(11, 232, 129,1.0)',
            'rgba(11, 232, 129,1.0)',

           
          ],
        },
      ]
      },
      options:{
        
        legend:{
          display:true,
          position:'top',
          labels:{
            fontColor:'#000'
          }
        },
        scales: {
          yAxes: [{
              ticks: {
                  beginAtZero: true
              }
          }],
          xAxes: [{
            ticks: {
                display: false
            }
        }]
        },
        tooltips:{
          enabled:true
        },
        
    }
  }
    var myChartBar = new Chart(myChartBar, configBar)


// Chart Line
    let myChartLine = document.querySelector('#myChartLine').getContext('2d');
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

  var configLine= {
      type:'line', // bar, horizontalBar, pie, line, HorizontalBar, radar, polarArea
      data:{
        labels:[ 
          `${arraryListnameCity[0]}`,
          `${arraryListnameCity[1]}`,
          `${arraryListnameCity[2]}`,
          `${arraryListnameCity[3]}`,
          `${arraryListnameCity[4]}`,
          `${arraryListnameCity[5]}`,
          `${arraryListnameCity[6]}`,
          `${arraryListnameCity[7]}`,
          `${arraryListnameCity[8]}`,
          `${arraryListnameCity[9]}`,
          
        ],
        datasets:[{
          label:'Giá tiền',
          data:[
            `${arraryListamount[0]}`,
            `${arraryListamount[1]}`,
            `${arraryListamount[2]}`,
            `${arraryListamount[3]}`,
            `${arraryListamount[4]}`,
            `${arraryListamount[5]}`,
            `${arraryListamount[6]}`,
            `${arraryListamount[7]}`,
            `${arraryListamount[8]}`,
            `${arraryListamount[9]}`,
           
            
           ],
          //backgroundColor:'green',
          borderWidth:1,
          pointHoverBackgroundColor: "red",
          pointBorderColor:"green",
          pointBackgroundColor:"green",
          strokeColor:"green",
          borderColor:"green",
          tension: 0,
          fill: false,
        },]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'top',
          },
        },
        tooltips:{
          enabled: true
        },
        scales: {
         
          xAxes: [{
            ticks: {
                display: false
            }
        }]
        },
        

      },
    }

// chart HorizontalBar


let myChartHorizontalBar = document.querySelector('#myChartHorizontalBar').getContext('2d');
// Global Options
Chart.defaults.global.defaultFontFamily = 'Lato';
Chart.defaults.global.defaultFontSize = 18;
Chart.defaults.global.defaultFontColor = '#777';

var configHorizontalBar= {
  type:'horizontalBar', // bar, horizontalBar, pie, line, HorizontalBar, radar, polarArea
  data:{
    labels:[ 
      `${arraryListnameCity[0]}`,
      `${arraryListnameCity[1]}`,
      `${arraryListnameCity[2]}`,
      `${arraryListnameCity[3]}`,
      `${arraryListnameCity[4]}`,
      `${arraryListnameCity[5]}`,
      `${arraryListnameCity[6]}`,
      `${arraryListnameCity[7]}`,
      `${arraryListnameCity[8]}`,
      `${arraryListnameCity[9]}`,
     
    ],
    datasets:[{
      label:'Giá tiền ',
      data:[
        `${arraryListamount[0]}`,
        `${arraryListamount[1]}`,
        `${arraryListamount[2]}`,
        `${arraryListamount[3]}`,
        `${arraryListamount[4]}`,
        `${arraryListamount[5]}`,
        `${arraryListamount[6]}`,
        `${arraryListamount[7]}`,
        `${arraryListamount[8]}`,
        `${arraryListamount[9]}`,
       
        
       ],
      //backgroundColor:'green',
      backgroundColor:[
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
       
      ],
      borderWidth:1,
      borderColor:'#777',
      hoverBorderWidth:3,
      hoverBorderColor:[
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
        'rgba(11, 232, 129,1.0)',
       
      ],
    },
  ]
  },
  options:{
    
    legend:{
      display:true,
      position:'top',
      labels:{
        fontColor:'#000'
      }
    },
    scales: {
      xAxes: [{
          ticks: {
              beginAtZero: true
          }
      }],
      yAxes: [{
        ticks: {
            display: false
        }
    }]
    },
    tooltips:{
      enabled:true
    },
    
}
}


    document.querySelector('.itemBar').onclick = function (){
      myChartBar = new Chart(myChartBar, configBar);
    }
    document.querySelector('.itemLine').onclick = function(){
      myChartLine = new Chart(myChartLine, configLine);
    }
    document.querySelector('.itemHorizontalBar').onclick = function(){
      myChartHorizontalBar = new Chart(myChartHorizontalBar, configHorizontalBar);
    }
