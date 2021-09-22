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
      center: [55.730563, 37.565290],
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
      .add(new ymaps.Placemark([55.731156, 37.566503], {
         iconCaption: 'Отдел абдоминальной хирургии и онкологии',
         hintContent: 'Отдел абдоминальной хирургии и онкологии'
      }, {
         preset: 'islands#blueIcon'
      }))
      .add(new ymaps.GeoObject({
         geometry: {
            type: 'LineString',
            coordinates: [
               [55.729927, 37.563801],
               [55.729856, 37.563638],
               [55.729669, 37.563913],
               [55.731000, 37.566673],
               [55.731030, 37.566648]
            ]
         }
      }, {
         strokeColor: "#FB001A",
         strokeWidth: 4
      }))
}