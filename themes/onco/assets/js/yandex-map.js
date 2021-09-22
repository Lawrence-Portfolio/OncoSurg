// ymaps.ready(init);
// function init(){
//    var myMap = new ymaps.Map("map", {
//       center: [55.730074, 37.564018],
//       zoom: 18
//    }, {
//       searchControlProvider: 'yandex#search'
//    });
   
//    var myGeoObject = new ymaps.GeoObject({
//       geometry: {
//          type: "Point",
//          coordinates: [55.730200, 37.564018]
//      }
//    });

//    myMap.geoObjects.add(myGeoObject);
// }


ymaps.ready(init);

function init() {
   var myMap = new ymaps.Map("map", {
      center: [55.729410, 37.564380],
      zoom: 16.5
   }, {
      searchControlProvider: 'yandex#search'
   })

   myMap.geoObjects
      .add(new ymaps.Placemark([55.730200, 37.564000], {
         iconCaption: 'Вы здесь'
      }, {
         preset: 'islands#redIcon'
      }))
      .add(new ymaps.Placemark([55.728900, 37.562047], {
         iconCaption: 'Клиника онкологии, реконструктивно-пластической хирургии и радиологии\n' +
             'Онкологическое отделение хирургических методов лечения\n',
         hintContent: 'Клиника онкологии, реконструктивно-пластической хирургии и радиологии\n' +
             'Онкологическое отделение хирургических методов лечения\n'
      }, {
         preset: 'islands#blueIcon'
      }))
      .add(new ymaps.GeoObject({
         geometry: {
            type: 'LineString',
            coordinates: [
               [55.729891, 37.563658],
               [55.729232, 37.564631],
               [55.728414, 37.562769],
               [55.728487, 37.562633]
            ]
         }
      }, {
         strokeColor: "#FB001A",
         strokeWidth: 4
      }))
}