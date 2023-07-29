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
    title: 'Vellore',
    subtitle: 'A descriptive and interesting subtitle to draw in the reader',
    byline: 'By a Digital Storyteller',
    footer: 'Source: source citations, etc. <br> Created using <a href="https://github.com/mapbox/storytelling" target="_blank">Mapbox Storytelling</a> template.',
    chapters: [
        {
            id: 'slug-style-id',
            alignment: 'left',
            hidden: false,
            title: 'A-block',
            image: 'A-block.jpg',
            description: 'Albert einstein block',
            location: {
                center: [79.15715, 12.97331],
                zoom: 15.64,
                pitch: 45.00,
                bearing: -40.00
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
            title: 'Enzo',
            image: 'Enzo.jpg',
            description: 'Go Straight and turn right,after go straight,Youn will see Enzo!',
            location: {
                center: [79.15920, 12.97274],
                zoom: 18.96,
                pitch: 69.50,
                bearing: -39.20
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
        },
        {
            id: 'third-identifier',
            alignment: 'left',
            hidden: false,
            title: 'VIT Indoor statium',
            image: 'Indoor.jpg',
            description: 'Go Straight',
            location: {
                center: [79.15917, 12.97210],
                zoom: 19.03,
                pitch: 45.00,
                bearing: -40.00
            },
            mapAnimation: 'flyTo',
            rotateAnimation: false,
            callback: '',
            onChapterEnter: [],
            onChapterExit: []
        },
        {
            id: 'fourth-chapter',
            alignment: 'fully',
            hidden: false,
            title: 'P-block',
            image: 'P_block.jpg',
            description: 'Sardar patel block',
            location: {
                center: [79.16440, 12.97413],
                zoom: 18.02,
                pitch: 79.50,
                bearing: -24.00
            },
            mapAnimation: 'flyTo',
            rotateAnimation: false,
            callback: '',
            onChapterEnter: [],
            onChapterExit: []
        }
    ]
};
