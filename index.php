<?php
// Define a simple list of room names for the menu.
$rooms = [
  "Lilla Hyttnäs", "Förstugan", "Verkstaden", "Matsalen 1", "Matsalen 2", 
  "Karins skrivhörna", "Läsrummet", "Carls sovrum", "Karin och barnens sovrum", 
  "Gästrummet", "Heliga hörnet", "Gallerigången", "Gallerigången 2", 
  "Stora ateljen", "Bergsmansstugan", "Tvättrummet"
];

// Define detailed scene data for Pannellum.
// (Adjust panorama paths, hotspot details, etc., as needed.)
$scenes = [
  "Lilla Hyttnäs" => [
    "title" => "Lilla Hyttnäs",
    "hfov" => 110,
    "pitch" => 0,
    "yaw" => 0,
    "type" => "equirectangular",
    "panorama" => "/images/gs__0044.jpg",
    "hotSpots" => [
      [
        "pitch" => 0,
        "yaw" => 0,
        "type" => "scene",
        "text" => "Enter Carl Larsson gården",
        "sceneId" => "Förstugan",
        "targetYaw" => -90
      ]
    ]
  ],
  "Förstugan" => [
    "title" => "Förstugan",
    "hfov" => 110,
    "yaw" => 5,
    "type" => "equirectangular",
    "panorama" => "/images/gs__0028.jpg",
    "hotSpots" => [
      [
        "pitch" => 0,
        "yaw" => 15,
        "type" => "scene",
        "text" => "Verkstaden",
        "sceneId" => "Verkstaden",
        "targetYaw" => 0,
        "targetPitch" => 0
      ],
      [
        "pitch" => 38,
        "yaw" => 202,
        "type" => "scene",
        "text" => "Karins skrivhörna",
        "sceneId" => "Karins skrivhörna",
        "targetYaw" => 125,
        "targetPitch" => -5
      ],
      [
        "pitch" => -5,
        "yaw" => 295,
        "type" => "scene",
        "text" => "Matsalen 1",
        "sceneId" => "Matsalen 1",
        "targetYaw" => 90
      ],
      [
        "pitch" => 0,
        "yaw" => 220,
        "type" => "scene",
        "text" => "Heliga hörnet",
        "sceneId" => "Heliga hörnet",
        "targetYaw" => 0
      ]
    ]
  ],
  "Verkstaden" => [
    "title" => "Verkstaden",
    "hfov" => 110,
    "pitch" => -3,
    "yaw" => 117,
    "type" => "equirectangular",
    "panorama" => "/images/gs__0027.jpg",
    "hotSpots" => [
      [
        "pitch" => 0,
        "yaw" => 180,
        "type" => "scene",
        "text" => "Förstugan",
        "sceneId" => "Förstugan",
        "targetYaw" => 180
      ]
    ]
  ],
  "Matsalen 1" => [
    "title" => "Matsalen 1",
    "hfov" => 110,
    "pitch" => 0,
    "yaw" => 0,
    "type" => "equirectangular",
    "panorama" => "/images/gs__0041.jpg",
    "hotSpots" => [
      [
        "pitch" => 0,
        "yaw" => 300,
        "type" => "scene",
        "text" => "Förstugan",
        "sceneId" => "Förstugan",
        "targetYaw" => 90
      ],
      [
        "pitch" => 0,
        "yaw" => 180,
        "type" => "scene",
        "text" => "Matsalen 2",
        "sceneId" => "Matsalen 2",
        "targetYaw" => 180
      ]
    ]
  ],
  "Matsalen 2" => [
    "title" => "Matsalen 2",
    "hfov" => 110,
    "pitch" => 0,
    "yaw" => 0,
    "type" => "equirectangular",
    "panorama" => "/images/gs__0042.jpg",
    "hotSpots" => [
      [
        "pitch" => -15,
        "yaw" => -20,
        "type" => "scene",
        "text" => "Matsalen 1",
        "sceneId" => "Matsalen 1",
        "targetYaw" => 0
      ]
    ]
  ],
  "Karins skrivhörna" => [
    "title" => "Karins skrivhörna",
    "hfov" => 110,
    "pitch" => 0,
    "yaw" => 0,
    "type" => "equirectangular",
    "panorama" => "/images/gs__0029.jpg",
    "hotSpots" => [
      [
        "pitch" => -35,
        "yaw" => 145,
        "type" => "scene",
        "text" => "Förstugan",
        "sceneId" => "Förstugan",
        "targetYaw" => 0
      ],
      [
        "pitch" => -5,
        "yaw" => 208,
        "type" => "scene",
        "text" => "Carls sovrum",
        "sceneId" => "Carls sovrum",
        "targetYaw" => 135
      ],
      [
        "pitch" => -10,
        "yaw" => 150,
        "type" => "scene",
        "text" => "Läsrummet",
        "sceneId" => "Läsrummet",
        "targetYaw" => 0
      ]
    ]
  ],
  "Läsrummet" => [
    "title" => "Läsrummet",
    "hfov" => 110,
    "pitch" => 0,
    "yaw" => 0,
    "type" => "equirectangular",
    "panorama" => "/images/gs__0031.jpg",
    "hotSpots" => [
      [
        "pitch" => -5,
        "yaw" => 145,
        "type" => "scene",
        "text" => "Karins skrivhörna",
        "sceneId" => "Karins skrivhörna",
        "targetYaw" => 0
      ],
      [
        "pitch" => -5,
        "yaw" => -45,
        "type" => "scene",
        "text" => "Gästrummet",
        "sceneId" => "Gästrummet",
        "targetYaw" => 0
      ]
    ]
  ],
  "Carls sovrum" => [
    "title" => "Carls sovrum",
    "hfov" => 110,
    "pitch" => 0,
    "yaw" => 0,
    "type" => "equirectangular",
    "panorama" => "/images/gs__0040.jpg",
    "hotSpots" => [
      [
        "pitch" => -10,
        "yaw" => -40,
        "type" => "scene",
        "text" => "Karins skrivhörna",
        "sceneId" => "Karins skrivhörna",
        "targetYaw" => 0
      ],
      [
        "pitch" => -10,
        "yaw" => 185,
        "type" => "scene",
        "text" => "Karin och barnens sovrum",
        "sceneId" => "Karin och barnens sovrum",
        "targetYaw" => 0
      ]
    ]
  ],
  "Karin och barnens sovrum" => [
    "title" => "Karin och barnens sovrum",
    "hfov" => 110,
    "pitch" => 0,
    "yaw" => 0,
    "type" => "equirectangular",
    "panorama" => "/images/GS__0030.jpg",
    "hotSpots" => [
      [
        "pitch" => 0,
        "yaw" => 180,
        "type" => "scene",
        "text" => "Carls sovrum",
        "sceneId" => "Carls sovrum",
        "targetYaw" => 0
      ]
    ]
  ],
  "Gästrummet" => [
    "title" => "Gästrummet",
    "hfov" => 110,
    "pitch" => 0,
    "yaw" => 0,
    "type" => "equirectangular",
    "panorama" => "/images/gs__0032.jpg",
    "hotSpots" => [
      [
        "pitch" => 0,
        "yaw" => 225,
        "type" => "scene",
        "text" => "Läsrummet",
        "sceneId" => "Läsrummet",
        "targetYaw" => 145,
        "targetPitch" => -5
      ],
      [
        "pitch" => 0,
        "yaw" => -45,
        "type" => "scene",
        "text" => "Tvättrummet",
        "sceneId" => "Tvättrummet",
        "targetYaw" => 0
      ]
    ]
  ],
  "Heliga hörnet" => [
    "title" => "Heliga hörnet",
    "hfov" => 110,
    "pitch" => 0,
    "yaw" => 0,
    "type" => "equirectangular",
    "panorama" => "/images/gs__0035.jpg",
    "hotSpots" => [
      [
        "pitch" => 0,
        "yaw" => -88,
        "type" => "scene",
        "text" => "Förstugan",
        "sceneId" => "Förstugan",
        "targetYaw" => 0
      ],
      [
        "pitch" => 0,
        "yaw" => 0,
        "type" => "scene",
        "text" => "Gallerigången",
        "sceneId" => "Gallerigången",
        "targetYaw" => 0
      ]
    ]
  ],
  "Gallerigången" => [
    "title" => "Gallerigången",
    "hfov" => 110,
    "pitch" => 0,
    "yaw" => 0,
    "type" => "equirectangular",
    "panorama" => "/images/gs__0034.jpg",
    "hotSpots" => [
      [
        "pitch" => 0,
        "yaw" => 180,
        "type" => "scene",
        "text" => "Heliga hörnet",
        "sceneId" => "Heliga hörnet",
        "targetYaw" => 270
      ],
      [
        "pitch" => 0,
        "yaw" => 0,
        "type" => "scene",
        "text" => "Gallerigången 2",
        "sceneId" => "Gallerigången 2",
        "targetYaw" => 0
      ]
    ]
  ],
  "Gallerigången 2" => [
    "title" => "Gallerigången 2",
    "hfov" => 110,
    "pitch" => 0,
    "yaw" => 0,
    "type" => "equirectangular",
    "panorama" => "/images/gs__0039.jpg",
    "hotSpots" => [
      [
        "pitch" => 0,
        "yaw" => 180,
        "type" => "scene",
        "text" => "Gallerigången",
        "sceneId" => "Gallerigången",
        "targetYaw" => 180
      ],
      [
        "pitch" => 0,
        "yaw" => 90,
        "type" => "scene",
        "text" => "Stora ateljen",
        "sceneId" => "Stora ateljen",
        "targetYaw" => 0
      ]
    ]
  ],
  "Stora ateljen" => [
    "title" => "Stora ateljen",
    "hfov" => 110,
    "pitch" => 0,
    "yaw" => 0,
    "type" => "equirectangular",
    "panorama" => "/images/gs__0036.jpg",
    "hotSpots" => [
      [
        "pitch" => -5,
        "yaw" => 170,
        "type" => "scene",
        "text" => "Gallerigången 2",
        "sceneId" => "Gallerigången 2",
        "targetYaw" => 180
      ],
      [
        "pitch" => -2,
        "yaw" => 210,
        "type" => "scene",
        "text" => "Bergsmansstugan",
        "sceneId" => "Bergsmansstugan"
      ]
    ]
  ],
  "Bergsmansstugan" => [
    "title" => "Bergsmansstugan",
    "hfov" => 110,
    "pitch" => 0,
    "yaw" => 0,
    "type" => "equirectangular",
    "panorama" => "/images/gs__0037.jpg",
    "hotSpots" => [
      [
        "pitch" => 0,
        "yaw" => 210,
        "type" => "scene",
        "text" => "Stora ateljen",
        "sceneId" => "Stora ateljen",
        "targetYaw" => 0
      ]
    ]
  ],
  "Tvättrummet" => [
    "title" => "Tvättrummet",
    "hfov" => 110,
    "pitch" => 0,
    "yaw" => 0,
    "type" => "equirectangular",
    "panorama" => "/images/gs__0033.jpg",
    "hotSpots" => [
      [
        "pitch" => -10,
        "yaw" => 60,
        "type" => "scene",
        "text" => "Gästrummet",
        "sceneId" => "Gästrummet",
        "targetYaw" => 0
      ]
    ]
  ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>360 Viewer</title>
  <!-- Link to CSS and PWA manifest -->
  <link rel="stylesheet" href="style.css" />
  <link rel="manifest" href="manifest.json" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css" />
  <script src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
</head>
<body>
  <div class="container">
    <div id="panorama" style="width: 100%; height: 100vh;"></div>
    <button id="menu-btn"></button>
  </div>
  <div class="menu-content menu-slide-out no-animation">
    <h2>Utforska Lilla Hyttnäs Huset</h2>
    <!-- Search input for filtering rooms -->
    <input type="text" id="search-input" placeholder="Search rooms..." />
    <ul id="room-list">
      <?php foreach($rooms as $room): ?>
        <li>
          <button data-pano="<?php echo htmlspecialchars($room); ?>">
            <?php echo htmlspecialchars($room); ?>
          </button>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
  
  <script>
    // Register the Service Worker for PWA functionality.
    if ('serviceWorker' in navigator) {
      navigator.serviceWorker.register('service-worker.js')
        .then(registration => {
          console.log('Service Worker registered with scope:', registration.scope);
        })
        .catch(error => {
          console.error('Service Worker registration failed:', error);
        });
    }

    // Utility function to escape special characters for selectors.
    function escapeSelector(selector) {
      return selector.replace(/([!"#$%&'()*+,.\/:;<=>?@[\\\]^`{|}~])/g, "\\$1");
    }

    // Update the active button in the menu based on scene.
    function updateActiveButton(sceneId) {
      document.querySelectorAll(".menu-content button").forEach(button => {
        button.classList.remove("active");
      });
      const activeButton = document.querySelector(`.menu-content button[data-pano="${escapeSelector(sceneId)}"]`);
      if (activeButton) activeButton.classList.add("active");
    }

    // Retrieve scene data generated by PHP.
    const scenes = <?php echo json_encode($scenes); ?>;

    // Initialize the Pannellum viewer.
    const viewer = pannellum.viewer("panorama", {
      default: {
        firstScene: "Lilla Hyttnäs",
        sceneFadeDuration: 2000,
        autoLoad: true,
        showZoomCtrl: false,
        compass: false
      },
      scenes: scenes
    });

    // Toggle menu visibility when the menu button is clicked.
    const menuButton = document.getElementById("menu-btn");
    const menuContent = document.querySelector(".menu-content");
    menuButton.addEventListener("click", () => {
      menuContent.classList.toggle("menu-slide-out");
      menuContent.classList.toggle("menu-slide-in");
      menuContent.classList.remove("no-animation");
    });

    // Load a scene when a room button is clicked.
    document.querySelector(".menu-content").addEventListener("click", e => {
      if (e.target.tagName === "BUTTON") {
        const panoId = e.target.getAttribute("data-pano");
        viewer.loadScene(panoId);
        updateActiveButton(panoId);
      }
    });

    // Update the active menu button when the scene changes.
    viewer.on("scenechange", sceneId => {
      updateActiveButton(sceneId);
    });

    // Filter the room list based on search input.
    const searchInput = document.getElementById("search-input");
    const roomList = document.getElementById("room-list");
    searchInput.addEventListener("input", function () {
      const filter = this.value.toLowerCase();
      const buttons = roomList.getElementsByTagName("button");
      for (let i = 0; i < buttons.length; i++) {
        const txtValue = buttons[i].textContent || buttons[i].innerText;
        buttons[i].parentElement.style.display = txtValue.toLowerCase().indexOf(filter) > -1 ? "" : "none";
      }
    });
  </script>
</body>
</html>
