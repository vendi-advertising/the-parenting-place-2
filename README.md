clone repo

to install frontend build tools

```
npm install
```

run webpack to build the bundled css and js and watch /src for changes

```
npm run dev
```

run to build final deployable bundle

```
npm run build
```

project map

/partials/sections are mapped to the advanced custom fields of the same name

```
.
├── 404.php
├── archive.php
├── comments.php
├── footer.php
├── functions.php
├── header.php
├── inc
│   ├── custom-fields.php
│   ├── customizer
│   │   ├── footer.php
│   │   ├── layout.php
│   │   └── social.php
│   ├── customizer.php
│   ├── jetpack.php
│   ├── page-tags.php
│   ├── post-helpers.php
│   ├── sub-nav.php
│   └── wp-bootstrap-navwalker.php
├── index.php
├── LICENSE.md
├── package.json
├── page-templates
│   ├── left-sidebar.php
│   ├── no-sidebar.php
│   └── right-sidebar.php
├── partials
│   ├── components
│   │   └── button.php
│   ├── posts
│   │   ├── ai1ec_event.php
│   │   ├── none.php
│   │   ├── page.php
│   │   ├── post.excerpt.php
│   │   └── post.php
│   └── sections
│       ├── banner
│       │   ├── image.php
│       │   └── image-slider.php
│       ├── blog
│       │   └── home.php
│       ├── box
│       │   ├── hover-image.php
│       │   └── image.php
│       ├── card
│       │   └── standard.php
│       ├── events
│       │   ├── calendar.php
│       │   └── slider.php
│       ├── image
│       │   ├── image.php
│       │   └── image-slider.php
│       ├── media
│       │   ├── gallery.php
│       │   ├── image-card.php
│       │   └── video.php
│       ├── slider
│       │   ├── small-image-slider.php
│       │   └── standard-slider.php
│       ├── social
│       └── text
│           ├── background-color.php
│           ├── background-image.php
│           ├── image
│           ├── text-block.php
│           └── text-section.php
├── README.md
├── screenshot.png
├── searchform.php
├── search.php
├── sidebar.php
├── single.php
├── src
│   ├── js
│   │   ├── index.js
│   │   ├── libs
│   │   │   └── tiny-slider.js
│   │   └── modules
│   │       ├── index.js
│   │       ├── nav.js
│   │       ├── sliders.js
│   │       └── utils.js
│   └── scss
│       ├── base
│       │   ├── _accessibility.scss
│       │   ├── _alignments.scss
│       │   ├── _clearings.scss
│       │   ├── _content.scss
│       │   ├── index.scss
│       │   ├── _infinite-scroll.scss
│       │   ├── _normalize.scss
│       │   ├── _page.scss
│       │   └── _root.scss
│       ├── custom
│       │   ├── elements
│       │   ├── index.scss
│       │   ├── layout
│       │   ├── lib-overrides
│       │   ├── media
│       │   ├── mixins
│       │   ├── posts
│       │   ├── sections
│       │   ├── utils
│       │   └── variables
│       └── style.scss
├── style.css
├── webpack.common.js
├── webpack.dev.js
└── webpack.prod.js
```
