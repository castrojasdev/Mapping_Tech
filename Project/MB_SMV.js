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
    title: 'Main block To SMV',
    subtitle: 'Using Our Tech',
    chapters: [
        
            {
                id: 'slug-style-id',
                alignment: 'left',
                hidden: false,
                title: 'Main Block',
                image: 'IMG/VIT MAIN BLOCK.jpg',
                description: 'Turn Right and Go Straight',
                location: {
                    center: [79.15595, 12.96917],
                    zoom: 18.28,
                    pitch: 1.21,
                    bearing: 0.00
                },
                mapAnimation: 'flyTo',
                rotateAnimation: false,
                callback: '',
                onChapterEnter: [
                    // {
                    //     layer: 'layer-name',
                    //     opacity: 1,
                    //     duration: 5000
                    // }
                ],
                onChapterExit: [
                    // {
                    //     layer: 'layer-name',
                    //     opacity: 0
                    // }
                ]
            },
            {
                id: 'second-identifier',
                alignment: 'right',
                hidden: false,
                title: 'SMV',
                image: 'IMG/SMV.jpg',
                description: 'You will see Panzer ,Go straight and turn left',
                location: {
                    center: [79.15776, 12.96914],
                    zoom: 18.10,
                    pitch: 68.00,
                    bearing: -10.40
                    // flyTo additional controls-
                    // These options control the flight curve, making it move
                    // slowly and zoom out almost completely before starting
                    // to pan.
                    //speed: 2, // make the flying slow
                    //curve: 1, // change the speed at which it zooms out
                },
                mapAnimation: 'flyTo',
                rotateAnimation: true,
                callback: '',
                onChapterEnter: [],
                onChapterExit: []
            }
        
                
    ]
};
