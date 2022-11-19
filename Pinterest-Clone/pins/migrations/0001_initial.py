# Generated by Django 4.0.4 on 2022-04-23 07:45

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Pins',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('title', models.CharField(max_length=30)),
                ('link', models.URLField(max_length=30)),
                ('description', models.TextField()),
                ('img', models.ImageField(upload_to='images/')),
            ],
            options={
                'db_table': 'pins',
            },
        ),
    ]
