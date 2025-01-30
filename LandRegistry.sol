// SPDX-License-Identifier: MIT
pragma solidity ^0.8.0;

import "@openzeppelin/contracts/token/ERC721/extensions/ERC721URIStorage.sol";
import "@openzeppelin/contracts/access/Ownable.sol";

contract LandRegistry is ERC721URIStorage, Ownable {
    uint256 private _tokenIds;

    struct Land {
        uint256 id;
        string location;
        address owner;
    }

    mapping(uint256 => Land) public lands;

    constructor() ERC721("Metaverse Land", "LAND") {}

    function mintLand(string memory location, string memory tokenURI) public onlyOwner returns (uint256) {
        _tokenIds++;
        uint256 newLandId = _tokenIds;
        _mint(msg.sender, newLandId);
        _setTokenURI(newLandId, tokenURI);

        lands[newLandId] = Land(newLandId, location, msg.sender);

        return newLandId;
    }

    function transferLand(uint256 landId, address newOwner) public {
        require(ownerOf(landId) == msg.sender, "Only owner can transfer");
        _transfer(msg.sender, newOwner, landId);
        lands[landId].owner = newOwner;
    }
}
