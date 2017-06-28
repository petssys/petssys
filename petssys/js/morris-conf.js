var Script = function () {

    //morris chart

    $(function () {
      // data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type
      var tax_data = [
           {"periodo": "2011 Q3", "Productos Vendidos": 3407, "sorned": 660},
           {"periodo": "2011 Q2", "Productos Vendidos": 3351, "sorned": 629},
           {"periodo": "2011 Q1", "Productos Vendidos": 3269, "sorned": 618},
           {"periodo": "2010 Q4", "Productos Vendidos": 3246, "sorned": 661},
           {"periodo": "2009 Q4", "Productos Vendidos": 3171, "sorned": 676},
           {"periodo": "2008 Q4", "Productos Vendidos": 3155, "sorned": 681},
           {"periodo": "2007 Q4", "Productos Vendidos": 3226, "sorned": 620},
           {"periodo": "2006 Q4", "Productos Vendidos": 3245, "sorned": null},
           {"periodo": "2005 Q4", "Productos Vendidos": 3289, "sorned": null}
      ];
      Morris.Line({
        element: 'hero-graph',
        data: tax_data,
        xkey: 'periodo',
        ykeys: ['Productos Vendidos', 'sorned'],
        labels: ['Productos Vendidos', 'Devoluciones'],
        lineColors:['#4ECDC4','#ed5565']
      });

      Morris.Donut({
        element: 'hero-donut',
        data: [
          {label: 'Purina', value: 25 },
          {label: 'Prod. Aseo', value: 40 },
          {label: 'Accesorios', value: 25 },
          {label: 'Medicamentos', value: 10 }
        ],
          colors: ['#3498db', '#2980b9', '#34495e'],
        formatter: function (y) { return y + "%" }
      });

      Morris.Area({
        element: 'hero-area',
        data: [
          {period: '2010 Q1', nutrecan: 2666, accesorios: null, aseo: 2647},
          {period: '2010 Q2', nutrecan: 2778, accesorios: 2294, aseo: 2441},
          {period: '2010 Q3', nutrecan: 4912, accesorios: 1969, aseo: 2501},
          {period: '2010 Q4', nutrecan: 3767, accesorios: 3597, aseo: 5689},
          {period: '2011 Q1', nutrecan: 6810, accesorios: 1914, aseo: 2293},
          {period: '2011 Q2', nutrecan: 5670, accesorios: 4293, aseo: 1881},
          {period: '2011 Q3', nutrecan: 4820, accesorios: 3795, aseo: 1588},
          {period: '2011 Q4', nutrecan: 15073, accesorios: 5967, aseo: 5175},
          {period: '2012 Q1', nutrecan: 10687, accesorios: 4460, aseo: 2028},
          {period: '2012 Q2', nutrecan: 8432, accesorios: 5713, aseo: 1791}
        ],

          xkey: 'period',
          ykeys: ['nutrecan', 'accesorios', 'aseo'],
          labels: ['Nutrecan', 'Accesorios', 'Productos de Aseo'],
          hideHover: 'auto',
          lineWidth: 1,
          pointSize: 5,
          lineColors: ['#4a8bc2', '#ff6c60', '#a9d86e'],
          fillOpacity: 0.5,
          smooth: true
      });

      Morris.Bar({
        element: 'hero-bar',
        data: [
          {device: 'Cat-Food', total: 136},
          {device: 'Accesorios', total: 137},
          {device: 'Nutrecan', total: 275},
          {device: 'Wiskas', total: 380},
          {device: 'Purina', total: 655},
          {device: 'Dog swau', total: 1571}
        ],
        xkey: 'device',
        ykeys: ['total'],
        labels: ['Total'],
        barRatio: 0.4,
        xLabelAngle: 35,
        hideHover: 'auto',
        barColors: ['#ac92ec']
      });

      new Morris.Line({
        element: 'examplefirst',
        xkey: 'year',
        ykeys: ['value'],
        labels: ['Value'],
        data: [
          {year: '2017', value: 20},
          {year: '2016', value: 10},
          {year: '2015', value: 5},
          {year: '2014', value: 5},
          {year: '2013', value: 20}
        ]
      });

      $('.code-example').each(function (index, el) {
        eval($(el).text());
      });
    });

}();




