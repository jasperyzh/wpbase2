# wpbase2
A default themes for wordpress_theme setup and block development

Additional page, feature, styling is to have child-theme over this default theme

## Main features

- setup with @wordpress/scripts for block development
  - npm run start to watch the file for block development
  - npm run build to finalized for production
  - all scripts and styles under /build are enqueue
- theme are enqueue with "enqueue_bootstrap" & "enqueue_bootstrap_icons" by default; remove_action if child-theme need more controls
- all theme-templates are generated and migrated over from _underscore: https://underscores.me/ - wordpress starter theme generator

## Setup
```bash
# styles
import "./src/block-frontend.scss"
import "./src/block-backend.scss"

# scripts
import "./src/block-frontend.js"
import "./src/block-backend.js"

# _blocks - mostly based on bootstrap
_BootstrapCard.js

# development and build
npm run start
npm run build
```

---
## log

### v0.1.0
- setup default theme
