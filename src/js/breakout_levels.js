var levels = [
    [
    "", "", "", "", "", "",
    "  #####   #####      #####  #       #     # ######  ",
    " #     # #     #    #     # #       #     # #     # ",
    " #       #          #       #       #     # #     # ",
    " #        #####     #       #       #     # ######  ",
    " #             #    #       #       #     # #     # ",
    " #     # #     #    #     # #       #     # #     # ",
    "  #####   #####      #####  #######  #####  ######  ",
    ""],
    [
    "", "",
    "  ################################################  ",
    "  #                                              #  ",
    "  #                                              #  ",
    "  #  ##  ##  ##  ##  ##  ##  ##  ##  ##  ##  ##  #  ",
    "  #  ##  ##  ##  ##  ##  ##  ##  ##  ##  ##  ##  #  ",
    "     ##  ##  ##  ##  ##  ##  ##  ##  ##  ##  ##     ",
    "     ##  ##  ##  ##  ##  ##  ##  ##  ##  ##  ##     ",
    "  #  ##  ##  ##  ##  ##  ##  ##  ##  ##  ##  ##  #  ",
    "  #  ##  ##  ##  ##  ##  ##  ##  ##  ##  ##  ##  #  ",
    "  #                                              #  ",
    "  #                                              #  ",
    "  ################################################  ",
    ""],
    [
    "",
    "   ##   ##                                ##   ##   ",
    "   ##   ##    ###########  ###########    ##   ##   ",
    "   ##         ###########  ###########         ##   ",
    "                #########  #########                ",
    "         ##       #######  #######       ##         ",
    "          ###       ############       ###          ",
    "    ##      ###       ###  ###       ###      ##    ",
    "    ####      ###                  ###      ####    ",
    "      ####      ###              ###      ####      ",
    "        ####      ###          ###      ####        ",
    "          ####      ###      ###      ####          ",
    "            ####      ###  ###      ####            ",
    "              ####      ####      ####              ",
    "                ####            ####                ",
    "                  ####        ####                  ",
    "                    ####    ####                    ",
    "                      ########                      ",
    "                        ####                        ",
    ""],
    [
    "", "",
    "   #     #     #     #           #     #     #      ",
    "  ###   ###   ###   ###         ###   ###   ###     ",
    "   #     #     #     #           #     #     #      ",
    "      #           #     #     #     #     #     #   ",
    "     ###         ###   ###   ###   ###   ###   ###  ",
    "      #           #     #     #     #     #     #   ",
    "         #     #     #     #           #     #      ",
    "        ###   ###   ###   ###         ###   ###     ",
    "         #     #     #     #           #     #      ",
    "      #     #           #     #     #           #   ",
    "     ###   ###         ###   ###   ###         ###  ",
    "      #     #           #     #     #           #   ",
    ""],
    [
    "", "",
    "       ##             ##             ##             ##        ",
    "      ####           ####           ####           ####       ",
    "     ######         ######         ######         ######      ",
    "    ## ## ##       ## ## ##       ## ## ##       ## ## ##     ",
    "    ########       ########       ########       ########     ",
    "     # ## #         # ## #          #  #          # ## #      ",
    "    #      #       #      #        # ## #        #      #     ",
    "     #    #         #    #        # #  # #        #    #      ",
    "", "",
    "    #     #         #     #         #     #         #     #   ",
    "     #   #        #  #   #  #        #   #        #  #   #  # ",
    "    #######       # ####### #       #######       # ####### # ",
    "   ## ### ##      ### ### ###      ## ### ##      ### ### ### ",
    "  ###########     ###########     ###########     ########### ",
    "  # ####### #      #########      # ####### #      #########  ",
    "  # #     # #       #     #       # #     # #       #     #   ",
    "     ## ##         #       #         ## ##         #       #  ",
    ""],
    [
    "", "",
    "   ##  ##  ##  ##  ##  ##  ##  ##  ##  ##  ##  ##   ",
    "   ##  ##  ##  ##  ##  ##  ##  ##  ##  ##  ##  ##   ",
    "", "",
    "     ##  ##  ##  ##  ##  ##  ##  ##  ##  ##  ##     ",
    "     ##  ##  ##  ##  ##  ##  ##  ##  ##  ##  ##     ",
    "", "",
    "   ##  ##  ##  ##  ##  ##  ##  ##  ##  ##  ##  ##   ",
    "   ##  ##  ##  ##  ##  ##  ##  ##  ##  ##  ##  ##   ",
    "", "",
    "  ###############  ##############  ###############  ",
    ""],
    [
    "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "",
    "                #################################    ###########            ############         #############   #######################                        ###########################  ##########           ############  #######################   #######################        ",
    "               #                               #    #          #           #           #        #           #   #                     #                        #                         #   #        #          #         #   #                     #   #                      #        ",
    "              #                               #    #           #           #           #        #           #   #                     #                        #                         #   #        #          #         #   #                     #   #                      #        ",
    "             #                                #    #           #           #           #       #            #   #                     #                        #                         #   #        #         #         #    #                     #   #                      #        ",
    "             #                               #    #            #           #           #       #            #   #                     #                        #                         #   #        #         #         #    #                     #   #                       #       ",
    "            #                               #    #             #          #            #      #             #  #                     #                        #                         #    #        #        #         #    #                     #   #                        #       ",
    "           #                                #    #             #          #            #      #             #  #                     #                        #                         #    #        #        #         #    #                     #   #                        #       ",
    "          #                                #    #              #          #            #     #              #  #                     #                        #                         #    #        #       #         #     #                     #   #                         #      ",
    "          #         #######################     ################          #############      ###############   ######################                         ##########################      #########       ##########      ######################    ###################       #      ",
    "         #         #                                                                                                                                                                                                                                                     #         #     ",
    "        #         #                                                                                                                                                                                                                                                     #         #      ",
    "       #         #                                                                                                                                                                                                                                                     #         #       ",
    "       #         #      ##################    ###################        ###############   #################   ######################                        ##########       ##########      ##########    ###########      #######################   ################         #        ",
    "      #         #      #                #    #                  #       #              #  #               #   #                    #                        #        #       #        #       #        #   #         #      #                     #   #                        #         ",
    "     #         #      #                #    #                   #       #              # #                #   #                    #                        #        #       #        #       #        #   #        #       #                     #   #                        #         ",
    "    #         #       #                #    #                   #       #              # #                #   #                    #                        #        #       #        #       #        #  #         #       #                     #   #                       #          ",
    "    #         #      #                #    #                    #       #        #     # #      #         #   #                   #                         #        #       #        #       #        #  #        #        #                     #   #                      #           ",
    "    #         #     #                 #    #                    #      #        ##     ##      #         #   #                    #                        #        #       #        #        #        # #         #       #                     #   #                      #            ",
    "    #         #     #                #    #                     #      #        ##     ##     ##         #   #                    #                        #        #       #        #        #        # #        #        #                     #   #                    ##             ",
    "     #        #    #                 #    #                     #      #        ##     #      ##         #   #        ############                         #        #       #        #        #        ##         #        #                     #   #         ###        #              ",
    "     #         #   #########        #    #          #####       #      #        ##           # #         #   #       #                                     #        #       #        #        #                  #         #        #############    #        #  #        #              ",
    "     #         #          #        #    #          #    #       #     #        # #           ##         #   #        #                                    #        #       #        #         #                  #        #        #                #         #  #        #              ",
    "      #        #         #         #    #         #     #       #     #        # #          # #         #   #        #                                    #        #       #        #         #                 #         #        #                #         #  #         #             ",
    "      #         #        #        #    #          #     #        #    #        # #          # #         #   #        #                                    #        #       #        #          #                #         #        #                #         #   #        #             ",
    "      #         #       #         #    #         #      #        #    #        # #         #  #         #   #        #                                    #        #       #        #          #               #          #        #                #        #    #        #             ",
    "       #         #######         #    #         #       #        #   #        #  #         # #         #   #         ##############                      #         ########        #           #               #         #         ##############  #         #    #         #            ",
    "       #                         #    #         #       #        #   #        #  #        #  #         #   #                     #                       #                         #           #              #          #                     #   #         #    #         #            ",
    "       #                        #    #         #        #        #   #        #  #        #  #         #   #                     #                       #                         #           #              #          #                     #   #         #     #        #            ",
    "        #                      #    #          #        #        #   #        #  #       #   #         #   #                     #                       #                         #           #             #           #                     #   #         #     #         #           ",
    "        #                      #    #         #         #        #  #        #   #       #  #         #   #                      #                      #                         #            #             #          #                      #  #         #      #         #           ",
    "        #                     #    #         #          #        #  #        #   #      #   #         #   #                     #                       #                         #            #            #           #                     #   #         #       #        #           ",
    "         #                    #    #         #          #        #  #        #   #      #   #         #   #                     #                       #                         #            #            #           #                     #   #         #       #         #          ",
    "         #                   #    #         #           #        #  #        #   #     #    #         #   #                     #                       #                         #            #           #            #                     #   #         #       #         #          ",
    "          ##########         #    ##########             #########  #########     #####     ##########    ######################                        ##########################              ###########             ######################    ##########        #         #          ",
    "                  #         #                                                                                                                                                                                                                                        #        #          ",
    "                 #         #                                                                                                                                                                                                                                         #         #         ",
    "                 #         #                                                                                                                                                                                                                                         #         #         ",
    "                #         #     ####################################################################################################################################################################################################################################  #        #         ",
    "                #         #    #                                                                                                                                                                                                                                   #  #         #        ",
    "               #         #    #                                                                                                                                                                                                                                    #  #         #        ",
    "               #         #    #                                                                                                                                                                                                                                    #  #         #        ",
    "              #         #    #                                                                                                                                                                                                                                      #  #         #       ",
    "             #         #     #                                                                                                                                                                                                                                      #  #         #       ",
    "             #         #    #                                                                                                                                                                                                                                       #  #         #       ",
    "            #         #    #                                                                                                                                                                                                                                         #  #         #      ",
    "            #         #    #                                                                                                                                                                                                                                         #  #         #      ",
    "           #         #    #                                                                                                                                                                                                                                          #  #         #      ",
    "           ##########     ############################################################################################################################################################################################################################################   ##########      ",
    ""]
];