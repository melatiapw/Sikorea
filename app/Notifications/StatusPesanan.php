<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

use\App\Models\Cart;

class StatusPesanan extends Notification
{
    use Queueable;

    protected $Cart;
    public function __construct(Cart $Cart)
    {
        $this->Cart=$Cart;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
      if ($this->Cart->status == 1) {
        return [
          'id_pesanan'=> $this->Cart->id,
          'data' => 'AREA ' . $this->Cart->id,
          'isi_notifikasi' => 'Mohon maaf, pesanan Anda ditolak',
          'waktu' => $this->Cart->updated_at->format('d-m-Y, H:i'),
        ];
      }
      else if ($this->Cart->status == 3) {
          return [
            'id_pesanan'=> $this->Cart->id,
            'data' => 'AREA ' . $this->Cart->id,
            'isi_notifikasi' => 'Pesanan Anda sudah diterima. Silakan konfirmasi pembayaran',
            'waktu' => $this->Cart->updated_at->format('d-m-Y, H:i'),
          ];
      }
      else if ($this->Cart->status == 4) {
          return [
            'id_pesanan'=> $this->Cart->id,
            'data' => 'AREA ' . $this->Cart->id,
            'isi_notifikasi' => 'Pesanan Anda sedang diproses',
            'waktu' => $this->Cart->updated_at->format('d-m-Y, H:i'),
          ];
        }
        else if($this->Cart->status == 5){
          return [
            'id_pesanan'=> $this->Cart->id,
            'data' => 'AREA ' .$this->Cart->id,
            'isi_notifikasi' => 'Pesanan Anda sudah diselesaikan',
            'waktu' => $this->Cart->updated_at->format('d-m-Y, H:i'),
          ];
        }

    }
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }
}
