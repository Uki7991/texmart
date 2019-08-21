<div class="form-row">
    <div class="col-3">
        <div class="form-group">
            <label for="latitude{{ $idMap ?? 'map' }}">Latitude</label>
            <input type="text" id="latitude{{ $idMap ?? 'map' }}" name="latitude" class="form-control">
        </div>
        <div class="form-group">
            <label for="longtitude{{ $idMap ?? 'map' }}">Longtitude</label>
            <input type="text" id="longtitude{{ $idMap ?? 'map' }}" name="longtitude" class="form-control">
        </div>
    </div>
    <div class="col-9">
        <div class="form-group">
            <div id="{{ $idMap ?? 'map' }}" style="width: 100%; height: 400px;"></div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        ymaps.ready(init);
        function init() {
            var myPlacemark,
                myMap = new ymaps.Map('{{ $idMap ?? 'map' }}', {
                    center: [42.865388923088396, 74.60104350048829],
                    zoom: 12
                }, {
                    searchControlProvider: 'yandex#search'
                });
            // Слушаем клик на карте.
            myMap.events.add('click', function (e) {
                var coords = e.get('coords');
                $('#latitude{{ $idMap ?? 'map' }}').val(coords[0]);
                $('#longtitude{{ $idMap ?? 'map' }}').val(coords[1]);
                // Если метка уже создана – просто передвигаем ее.
                if (myPlacemark) {
                    myPlacemark.geometry.setCoordinates(coords);
                }
                // Если нет – создаем.
                else {
                    myPlacemark = createPlacemark(coords);
                    myMap.geoObjects.add(myPlacemark);
                    // Слушаем событие окончания перетаскивания на метке.
                    myPlacemark.events.add('dragend', function () {
                        getAddress(myPlacemark.geometry.getCoordinates());
                    });
                }
                getAddress(coords);
            });
            // Создание метки.
            function createPlacemark(coords) {
                return new ymaps.Placemark(coords, {
                    iconCaption: 'поиск...'
                }, {
                    preset: 'islands#violetDotIconWithCaption',
                    draggable: true
                });
            }
            // Определяем адрес по координатам (обратное геокодирование).
            function getAddress(coords) {
                myPlacemark.properties.set('iconCaption', 'поиск...');
                ymaps.geocode(coords).then(function (res) {
                    var firstGeoObject = res.geoObjects.get(0);
                    console.log(firstGeoObject.getAddressLine());
                    myPlacemark.properties
                        .set({
                            // Формируем строку с данными об объекте.
                            iconCaption: [
                                // Название населенного пункта или вышестоящее административно-территориальное образование.
                                firstGeoObject.getLocalities().length ? firstGeoObject.getLocalities() : firstGeoObject.getAdministrativeAreas(),
                                // Получаем путь до топонима, если метод вернул null, запрашиваем наименование здания.
                                firstGeoObject.getThoroughfare() || firstGeoObject.getPremise()
                            ].filter(Boolean).join(', '),
                            // В качестве контента балуна задаем строку с адресом объекта.
                            balloonContent: firstGeoObject.getAddressLine()
                        });
                });
            }
        }
    </script>
@endpush
