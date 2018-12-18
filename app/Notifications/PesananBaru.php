<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PesananBaru extends Notification
{
  use Queueable;

  protected $Cart;
  public function __construct(Tiket $Tiket)
  {
      $this->Cart=$Cart;
  }

  public function via($notifiable)
  {
      return ['database'];
  }

  public function toArray($notifiable)
  {
      if ($this->Cart->Status == 1) {
        return [
          'id_tiket'=> $this->Tiket->ID,
          'data' => 'Tiket nomor #' .$this->Tiket->ID,
          'isi_notifikasi' => 'Keluhan Anda sedang diproses',
          'waktu' => $this->Tiket->UpdatedAt->format('d-m-Y, H:i'),
        ];
      }
      else{
        return [
          'id_tiket'=> $this->Tiket->ID,
          'data' => 'Tiket nomor #' .$this->Tiket->ID,
          'isi_notifikasi' => 'Keluhan Anda sudah diselesaikan',
          'waktu' => $this->Tiket->UpdatedAt->format('d-m-Y, H:i'),
        ];
      }

  }
}
