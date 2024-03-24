# [Laravel v11][l-laravel]
- [Reverb][l-reverb]
- [Pulse][l-pulse]
- [Livewire][l-livewire]

## TODO
- [ ] Deixar o projeto somente com o Reverb
- [ ] Criar as configurações de ambiente Nginx somente com o Reverb

### Iniciar Reverb
> php artisan reverb:start

### Caso for usar filas via banco de dados
- QUEUE_CONNECTION=database
> php artisan queue:listen

ou

- QUEUE_CONNECTION=sync

### Testar comando de Playground
> php artisan play

[l-laravel]: https://laravel.com/docs/11.x
[l-reverb]: https://laravel.com/docs/11.x/reverb
[l-pulse]: https://laravel.com/docs/11.x/pulse
[l-livewire]: https://livewire.laravel.com/docs/quickstart
