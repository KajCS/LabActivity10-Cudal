# Barangay Bulletin – Purok Cudal

[One or two sentences in your own words: what this project is, for example an online
bulletin for Barangay Matina Crossing where officials post announcements that residents
can browse, search and filter.]

Lab Activity 10 – Eloquent, Migrations & Seeding
Ken Andrew Cudal · 4-334 Full-Stack Web Development

## Personalized details

- **Posts per page:** 6. My last name, Cudal, only has 5 letters, and the lab says to use 6 if the last name is shorter than 6 letters, so I used `paginate(6)`.
- **Custom category:** Livelihood. I picked this because barangays often post about livelihood programs and trainings for residents, like skills seminars or small business assistance.
- **Birthday post date:** March 24, 2026, used as the `published_at` of the pinned
  post "Purok Cudal Clean-up Drive".
- **Kagawad author:** Kagawad Ken Cudal (kagawad.cudal@bulletin.test)

## How to run

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
npm install
npm run dev
php artisan serve
```

Then open http://127.0.0.1:8000.