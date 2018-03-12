var cmySquares = [];
var cmyDiv, r;

function setup() {
  noCanvas();

  for (i = 0; i < 10; i++) {
    cmySquares[i] = {
      display: function() {
        cmyDiv = createDiv("");
        cmyDiv.class("cmySquare");
      },
      position: function(x, y) {
        cmyDiv.position(x, y);
      }
    }
  }

  for (var i = 0; i < cmySquares.length; i++) {
    cmySquares[i].display();
    cmySquares[i].position(floor(random(100, windowWidth - 100)), floor(random(100, document.documentElement.scrollHeight - 100)));
  }
}

setup();
