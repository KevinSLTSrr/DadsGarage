# Dad's Garage

A car service scheduling website hosted from a 2010 Mac Mini running Ubuntu Server. Built as a learning project (and a running joke) to let friends and family book appointments — because I work on their cars so much anyway.

## Purpose

- Learn Linux server administration
- Explore web development (HTML, PHP, Nginx)
- Use AI tools (ChatGPT) to solve real-world problems
- Show others how far you can go with a bit of curiosity and no budget

## Tech Stack

- **OS**: Ubuntu Server (minimal)
- **Hardware**: 2010 Mac Mini (Macmini4,1)
- **Web Server**: Nginx + PHP-FPM (v8.3.6)
- **Domain**: DuckDNS subdomain (`dadsgarage.duckdns.org`)
- **SSL**: Let's Encrypt with Certbot
- **Frontend**: HTML/CSS (mobile-first focus in progress)
- **Backend**: PHP (saves bookings to a text file)
- **Security**: SSH on custom port, Fail2ban enabled

## Current Features

- Mobile + desktop form to book service
- Services list (oil change, etc.)
- Stores data in `bookings.txt`
- Humor baked in

## Future Ideas

- Add basic calendar or list view of upcoming bookings
- Email or text confirmations
- Let friends cancel/reschedule appointments
- Display maintenance tips or reminders

## Why This Exists

> Because when you fix everyone's car, they might as well book it like it’s Jiffy Lube — but hosted from a $0 setup in your garage.

---

### Author

Kevin (a.k.a. SLTSrr) — construction estimator by day, car whisperer by night.
