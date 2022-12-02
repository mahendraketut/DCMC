
![Logo](resources/img/JDCDentalMasterBW.png)


# DCMC: Web-Based Booking and Scheduling Management System for JDC Dental Clinic

DCMC which stands for Dental Clinic Management Centre, is a web-based booking and scheduling management system for JDC Dental Clinic
DCMC (Dental Clinic Management Center) is a web-based platform designed to answer the problems faced by JDC Dental Clinic in terms of
managing their appointments, queues, and clinic management that still uses traditional methods by recording it in a notebook.
By Implementing this system, we hope that the problem in maladministration and disorganized can be solved.


## Acknowledgements

- [Laravel](https://laravel.com/)
- [Hope UI](https://hopeui.iqonic.design/)



## Authors

- E1900340 - I Ketut Mahendra [@mahendraketut](https://github.com/mahendraketut)
- E1900341 - I Made Arya Wiguna [@Mazzery](https://github.com/Mazzery)

## Color Reference

| Color             | Hex                                                              |
|-------------------|------------------------------------------------------------------|
| Black             | ![#000000](https://via.placeholder.com/10/000000?text=+) #000000 |
| Phthalo Blue      | ![#001194](https://via.placeholder.com/10/001194?text=+) #001194 |
| Sea Green Crayola | ![#2AFFD8](https://via.placeholder.com/10/2AFFD8?text=+) #2AFFD8 |
| Pacific Blue      | ![#1CB2C2](https://via.placeholder.com/10/1CB2C2?text=+) #1CB2C2 |
| White             | ![#FFFFFF](https://via.placeholder.com/10/FFFFFF?text=+) #FFFFFF |

## Feedback

If you have any feedback, please reach out to us at dev.mahendraketut@gmail.com


## Run Locally

Clone the project

```bash
  git clone https://github.com/mahendraketut/DCMC.git
```

Go to the project directory

```bash
  cd my-project
```

Install composer

```bash
  composer install
```

copy environment file

```bash
  cp .example.env .env
```

generate key

```bash
  php artisan key:generate
```
run migration

```bash
  php artisan migrate
```
serve

```bash
  php artisan serve
```
