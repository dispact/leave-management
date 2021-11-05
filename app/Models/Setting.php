<?php

namespace App\Models;

use Cache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
	use HasFactory;

	protected $fillable = [
		'key',
		'value'
	];

	static public $settings = null;

	static function get($key, $default = null) {
		if (empty(self::$settings)) {
			self::$settings = Cache::rememberForever('settings', function() {
				return self::all();
			});
		}
		
		$setting = self::$settings->where('key', $key)->first();

		if (empty($setting)) {
			if (empty($default))
				throw new \Exception('Cannot find setting: ' . $key);
			else
				return $default;
		} else
			return $setting->value;
	}

	static function set($key, $value) {
		if (empty(self::$settings)) 
			self::$settings = Cache::rememberForever('settings', function() {
					return self::all();
			});
		
		if ($key && $value) {
			$setting = self::$settings->where('key', $key)->first();

			if (empty($setting)) {
				$setting = self::create(['key' => $key, 'value' => $value]);
				self::$settings->push($setting);
			} else {
				$setting->update(compact('value'));
			}

			Cache::put('settings', self::$settings);

			return true;
		} else
			return false;
	}
}
