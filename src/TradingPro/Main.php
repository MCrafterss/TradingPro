/*
 *   ________     _____      ____     _____    _______           _____     _____    ______
 * //__    __\\  //___\\    //  \\    || \ \   ||_____|          | __ \   //___\\  / /  \ \
 *    ||  ||    ||____//   //____\\   ||  \ \  ||_____  _______  ||__||  ||____//  | |  | |
 *    ||  ||    ||\\      /________\  ||   ||  ||_____| |_____|  |____/  ||\\      | |  | |
 *    ||  ||    || \\    ||        || ||___//  ||_____           | |     || \\     | \__/ |
 *    ||__||    ||  \\   ||        || |____/   ||_____|          |_|     ||  \\    \______/
 *    
 *      VERSION 1.0.0
 * 
 *      TradePro was created by @Hittmana to aid the process of trading on PocketMine servers.
 *     By using TradePro you will allow your users to easily and safely trade items without 
 *     having to worry about the other person lying and not giving the items they said they would.
 *     TradePro can also be found on GitHub and if you wish you can send a fork request to add to
 *     this project. Please ask if you do wish to fork this to use in your own project.
*/                        

namespace TradingPro;

use pocketmine\command\CommandSender;		
use pocketmine\command\Command;		
use pocketmine\plugin\PluginBase;		
use pocketmine\Player;		
use pocketmine\event\Listener;		
use pocketmine\item\Item;

class Main extends PluginBase implements Listener 		
  {		
     public function onEnable()		
       {		
        $this->getLogger()->info("TradePro v1.0.0 has been enabled");		
       $this->getServer()->getPluginManager()->registerEvents($this, $this);		
         }		
    public function onDisable()		
        {		
        $this->getLogger()->info("TradePro v1.0.0 has been disable");		
        }
      
