NEXORA SMM PANEL — FULL PHP + MYSQL STARTER

InfinityFree:
1. Create MySQL database.
2. Import sql/schema.sql in phpMyAdmin.
3. Edit config/config.php with DB_HOST, DB_NAME, DB_USER, DB_PASS and APP_URL.
4. Upload all files/folders to hosting.
5. Open public/register.php and create your first account.
6. Make it admin in phpMyAdmin:
   UPDATE users SET role="admin" WHERE username="YOUR_USERNAME";
7. Admin: /admin/index.php

Included:
- Register/login/logout
- Secure password hashing
- CSRF protection
- User dashboard
- Balance
- Manual deposit request + admin approval/rejection
- Withdrawal request + admin approval/rejection/refund
- Service management
- New orders + balance deduction
- Order management
- Support tickets
- Transaction ledger
- Provider API server-side adapter placeholder

Important:
- Real bKash/Nagad gateway is NOT included; deposits are manual approval.
- Provider API credentials must stay server-side.
- Do not put config/config.php with real secrets in a public GitHub repo.
- Use HTTPS and backups before production.
