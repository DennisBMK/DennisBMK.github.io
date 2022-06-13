//found at https://codepen.io/KenCorbettJr/pen/YYEPEd
// create an array with nodes

    var green = '#94BFA2';
    var orange = '#F9A657';
    var gray = '#EAEAEB';
    var red = '#E59393';

    var nodes = new vis.DataSet([
        {
          id: 1,
          label: 'Front page',
          value: 1
        },
        {
          id: 2,
          label: 'About me',
          color: {
            border: gray,
            background: '#F8F8F8'
          },
          borderWidth: 3,
          value: 2
        },
        {
          id: 3,
          label: 'My work',
          color: {
            border: gray,
            background: '#F8F8F8'
          },
          borderWidth: 3,
          value: 2
        },
        {
          id: 4,
          label: 'Resume',
          color: {
            border: gray,
            background: '#F8F8F8'
          },
          borderWidth: 3,
          value: 2
        },
        {
          id: 5,
          label: 'Services',
          color: {
            border: gray,
            background: '#F8F8F8'
          },
          borderWidth: 3,
          value: 2
        }
    ]);

    // create an array with edges
    var edges = new vis.DataSet([
        {from: 1, to: 2},
        {from: 1, to: 3},
        {from: 1, to: 4},
        {from: 1, to: 5},
    ]);

    // create a network
    var container = document.getElementById('sitemap');

    // provide the data in the vis format
    var data = {
        nodes: nodes,
        edges: edges
    };
    var options = {
      nodes: {
        value: 1,
        shape: 'dot',
        font: {
          size: 12,
          multi: true,
          strokeWidth: 3,
        },
        scaling: {
          min: 10,
          max: 40,
          label: {
            enabled: false,
            maxVisible: 5
          }
        },
      },
      edges: {
        color: {color: gray},
        smooth: false,
        width: 3
      }
    };

    // initialize your network!
    var network = new vis.Network(container, data, options);