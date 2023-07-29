var config = {
    style: 'mapbox://styles/mapbox/streets-v11',
    accessToken: 'pk.eyJ1Ijoiam9lYmdyZWF0IiwiYSI6ImNsODkxbnNpdTAyeDczd2xhMWJ1dmdkcnQifQ.gx5-HsP1-dGLjaQHZ048Jw',
    showMarkers: true,
    markerColor: '#3FB1CE',
    //projection: 'equirectangular',
    //Read more about available projections here
    //https://docs.mapbox.com/mapbox-gl-js/example/projections/
    inset: true,
    theme: 'dark',
    use3dTerrain: false, //set true for enabling 3D maps.
    title: 'VIT University',
    subtitle: 'VIT(Vellore Institude Of Technology)',
    chapters: [
        
        {
            id: 'second-identifier',
            alignment: 'right',
            hidden: false,
            title: 'VIT',
            image: 'IMG/VIT MAIN BLOCK.jpg',
            description: 'Starting Point of Journey and Enjoyment🙂',
            location: {
                center: [79.16003, 12.97184],
                zoom: 17.39,
                pitch: 60.94,
                bearing: -90.24,
                // flyTo additional controls-
                // These options control the flight curve, making it move
                // slowly and zoom out almost completely before starting
                // to pan.
                //speed: 1, // make the flying slow
                //curve: 9 // change the speed at which it zooms out
            },
            mapAnimation: 'flyTo',
            rotateAnimation: true,
            callback: '',
            onChapterEnter: [],
            onChapterExit: []
        },
     
    ]
};
