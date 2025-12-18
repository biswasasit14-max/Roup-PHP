project/
├── src/
│   ├── Config/
│   │   ├── DatabaseConfig.php
│   │   ├── SecurityConfig.php
│   │   └── AppConfig.php
│   ├── Auth/
│   │   ├── Guard.php
│   │   ├── Database.php
│   │   └── Validator.php
│   ├── Services/
│   │   ├── IPBlocker.php
│   │   ├── IPLocationService.php
│   │   └── Logger.php
│   ├── Models/
│   │   ├── User.php
│   │   └── BlockedIP.php
│   └── helpers.php
├── public/
│   ├── index.php
│   ├── login.php
│   ├── logout.php
│   ├── register.php
│   ├── dashboard.php
│   └── blocked-ips-viewer.php
└── vendor/ (composer autoload)