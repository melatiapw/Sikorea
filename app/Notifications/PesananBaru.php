<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

use\App\Models\Cart;

class PesananBaru extends Notification
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
        return [
          'id_pesanan'=> $this->Cart->id,
          'data' => 'Pesanan Baru: AREA #' .$this->Cart->id,
          'isi_notifikasi' => 'Pesanan baru: ID' .$this->Cart->id,
          'waktu' => $this->Cart->updated_at->format('d-m-Y, H:i'),
        ];
  }
}
