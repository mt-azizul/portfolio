<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    protected $table = 'social_media';

    protected $fillable = [
        'user_id',
        'name',
        'link',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getIconAttribute()
    {
        switch ($this->name) {
            case 'facebook':
                return 'fab fa-facebook-f';
                break;
            case 'twitter':
                return 'fab fa-twitter';
                break;
            case 'instagram':
                return 'fab fa-instagram';
                break;
            case 'linkedin':
                return 'fab fa-linkedin-in';
                break;
            case 'github':
                return 'fab fa-github';
                break;
            case 'youtube':
                return 'fab fa-youtube';
                break;
            case 'whatsapp':
                return 'fab fa-whatsapp';
                break;
            case 'skype':
                return 'fab fa-skype';
                break;
            case 'telegram':
                return 'fab fa-telegram';
                break;
            case 'tiktok':
                return 'fab fa-tiktok';
                break;
            case 'snapchat':
                return 'fab fa-snapchat';
                break;
            case 'pinterest':
                return 'fab fa-pinterest';
                break;
            case 'tumblr':
                return 'fab fa-tumblr';
                break;
            case 'reddit':
                return 'fab fa-reddit';
                break;
            case 'vimeo':
                return 'fab fa-vimeo';
                break;
            case 'flickr':
                return 'fab fa-flickr';
                break;
            case 'discord':
                return 'fab fa-discord';
                break;
            case 'slack':
                return 'fab fa-slack';
                break;
            case 'soundcloud':
                return 'fab fa-soundcloud';
                break;
            case 'spotify':
                return 'fab fa-spotify';
                break;
            case 'line':
                return 'fab fa-line';
                break;
            case 'x':
                return 'fab fa-twitter';
                break;
            default:
                return 'fa fa-link';
                break;
        }
    }
}
