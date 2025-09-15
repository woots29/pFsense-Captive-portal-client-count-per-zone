# pFsense Captive portal client count per zone API
This script retrieves and displays a list of connected clients on a pfSense Captive Portal. It organizes clients by their respective zones, allowing administrators to quickly see which users are authenticated in each portal. Useful for monitoring active sessions and troubleshooting zone-specific issues.

✅ **Tested on:**  
pfSense **2.8.0-RELEASE (amd64)**  
Built on Thu May 22 07:12:00 PST 2025  
FreeBSD **15.0-CURRENT**

## API output
```
{
  "WIFICP1": 384,
  "WIFICP2": 0,
  "WIFICP3": 107,
  "WIFICP4": 33
}
```

## Installation
Copy `services_captiveportal_zones_api.php` on on /usr/local/www/ of pFsense
